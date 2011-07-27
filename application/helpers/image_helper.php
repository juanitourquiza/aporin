<?php

function image($image_path, $width = 0, $height = 0) {
	//Referenciamos al objeto de codeigniter
	$CI = & get_instance();

	//Mostrar una imagen alternativa si no se encuentra la imagen
	if (! file_exists($image_path))
		$image_path = 'http://localhost/aporin/images/imagenotfoundt.gif';

	//generando un nuevo nombre para la imagen
	$fileinfo = pathinfo($image_path);
	$new_image_path = $fileinfo['dirname'] . '/' . $fileinfo['filename'] . '_' . $width . 'x' . $height . '.' . $fileinfo['extension'];

	//la primera ver que se pide la imagen
	//O si la imagen original es más reciente que nuestra imagen caché
	if ((! file_exists($new_image_path)) || filemtime($new_image_path) < filemtime($image_path)) {
		$CI->load->library('image_lib');

		//tamaños originales
		$original_size = getimagesize($image_path);
		$original_width = $original_size[0];
		$original_height = $original_size[1];
		$ratio = $original_width / $original_height;

		//tamaños requeridos
		$requested_width = $width;
		$requested_height = $height;

		$new_width = 0;
		$new_height = 0;

		//Calculando
		if ($requested_width > $requested_height) {
			$new_width = $requested_width;
			$new_height = $new_width / $ratio;
			if ($requested_height == 0)
				$requested_height = $new_height;

			if ($new_height < $requested_height) {
				$new_height = $requested_height;
				$new_width = $new_height * $ratio;
			}

		}
		else {
			$new_height = $requested_height;
			$new_width = $new_height * $ratio;
			if ($requested_width == 0)
				$requested_width = $new_width;

			if ($new_width < $requested_width) {
				$new_width = $requested_width;
				$new_height = $new_width / $ratio;
			}
		}

		$new_width = ceil($new_width);
		$new_height = ceil($new_height);

		//redimencionando
		$config = array();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $image_path;
		$config['new_image'] = $new_image_path;
		$config['maintain_ratio'] = FALSE;
		$config['height'] = $new_height;
		$config['width'] = $new_width;
		$CI->image_lib->initialize($config);
		$CI->image_lib->resize();
		$CI->image_lib->clear();

		//Corta la imagen si el alto y ancho son desiguales
		if (($width != 0) && ($height != 0)) {
			$x_axis = floor(($new_width - $width) / 2);
			$y_axis = floor(($new_height - $height) / 2);

			//cortando
			$config = array();
			$config['source_image'] = $new_image_path;
			$config['maintain_ratio'] = FALSE;
			$config['new_image'] = $new_image_path;
			$config['width'] = $width;
			$config['height'] = $height;
			$config['x_axis'] = $x_axis;
			$config['y_axis'] = $y_axis;
			$CI->image_lib->initialize($config);
			$CI->image_lib->crop();
			$CI->image_lib->clear();
		}
	}

	return $new_image_path;
}
?>