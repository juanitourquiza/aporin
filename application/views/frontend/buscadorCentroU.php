
<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">

                <?php
                foreach ($results->result() as $dato):

                    $id = $dato->id;
                    $titulo = $dato->titulo;
                    $link_descarga = $dato->link_descarga;
                    $idioma = $dato->idioma;
                    $imagen = $dato->imagen_libro;
                    if ($imagen=="")$imagen="http://img846.imageshack.us/img846/1610/sinimagen.jpg";
                    $tamano = $dato->tamano;
                    if ($tamano=="")$tamano="Sin especificar";
                    $resumen = $dato->resumen;
                    $numero_paginas = $dato->numero_paginas;
                    if ($numero_paginas=="")$numero_paginas="Sin especificar";

                    echo '<p>' . $titulo . '</p>';

                    $image_properties = array(
                        'src' => $imagen,
                        'alt' => $titulo,
                        'class' => 'post_images',
                        'width' => '200',
                        'height' => '200',
                        'title' => $titulo,
                        'rel' => 'lightbox',);

                    $attr = array(
                        'target' => '_blank'
                    );

                    echo img($image_properties);
                    echo anchor($link_descarga, '<<-Enlace->> ',$attr);
                    echo br(2);
                    echo '<b>Título:</b> ' . $titulo;
                    echo br(1);
                    echo '<b>Idioma:</b> ' . $idioma;
                    echo br(1);
                    echo '<b>Tamaño:</b> ' . $tamano .' MB';
                    echo br(1);
                    echo '<b>Número de Páginas:</b> ' . $numero_paginas;
                    echo br(1);
                    echo '<b>Resumen:</b> ' . $resumen;
                    echo br(3);
                ?>
<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="aporin.com" data-counter="right"></script>
<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="aporinweb" data-related="juanitourquiza:creador de aporin" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<!-- Añade esta etiqueta donde quieras colocar el botón +1 -->
<g:plusone size="medium"></g:plusone>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="aporin.com" send="true" layout="button_count" width="150" show_faces="true" font=""></fb:like>
<!-- Añade esta etiqueta en la cabecera o delante de la etiqueta body. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'es-419'}
</script>

<br>
<br>

<?php endforeach ?>

<?php echo anchor('home', 'Home'); //Imprime la numeración de páginas  ?>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>