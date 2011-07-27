<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
    <style type="text/css" media="screen">
        label,input{
         display: block;
         padding: 5px;
        }
        div.error{
         background-color: #FF8F8F;
         border: 1px solid #FF1111;
         margin-bottom: 5px;
         padding: 5px;
         width: 400px;
        }
    </style>
    <?php echo validation_errors('<div class=error>','</div>')?>
    <?php echo form_open('colaborar')?>
    <?php echo form_label('Campos Obligatorios con asterisco', 'obligatorio')?>
    <?php echo form_label('* Titulo:', 'titulo')?>
    <?php echo form_input(array('name'=>'titulo', 'id'=>'titulo', 'size'=>'50','value'=>set_value('titulo')))?>
    <?php echo form_label('Editorial:', 'editorial')?>
    <?php echo form_input(array('name'=>'editorial', 'id'=>'editorial', 'size'=>'50','value'=>set_value('email')))?>
    <?php echo form_label('Alojado (Lugar):', 'alojado')?>
    <?php echo form_input(array('name'=>'alojado', 'id'=>'alojado', 'size'=>'50'))?>
    <?php echo form_label('Etiquetas:', 'etiquetas')?>
    <?php echo form_input(array('name'=>'etiquetas', 'id'=>'etiquetas', 'size'=>'50'))?>
    <?php echo form_label('Idioma:', 'idioma')?>
    <?php $options = array(
                  'ingles'  => 'ingles',
                  'español'    => 'español',
                  'frances'   => 'frances',
                  'aleman' => 'aleman',
                );?>
    <?php echo form_dropdown('idioma', $options, 'español');?>

    <?php echo form_label('Año Publicación:', 'anio_publicacion')?>
    <?php
     $result_anio= $this->combo_model->cargaCmbAnio();
    ?>
    <?php echo form_dropdown('anio_publicacion', $result_anio, 'español');?>

    <?php echo form_label('Categoria:', 'categoria')?>
    

    <?php
     $result= $this->combo_model->cargaCmb('categorias');
    ?>

    <?php echo form_dropdown('categoria', $result, '');?>

    <?php echo form_label('Tamaño:', 'tamano')?>
    <?php echo form_input(array('name'=>'tamano', 'id'=>'tamano', 'size'=>'3'))?>MB
    <?php echo form_label('Número de Páginas:', 'numero_paginas')?>
    <?php echo form_input(array('name'=>'numero_paginas', 'id'=>'numero_paginas', 'size'=>'3'))?>
    <?php echo form_label('* Resumen:', 'resumen')?>
    <?php echo form_textarea(array ("name" => "resumen", "cols" => "40", "rows"=>"10"));?>
    <?php echo form_label('Imagen Libro (No es necesario escribir http://  - Se puede utilizar imageshack.us):', 'imagen_libro')?>
    <?php echo form_input(array('name'=>'imagen_libro', 'id'=>'imagen_libro', 'size'=>'70'))?>
    <?php echo form_label('* Enlace al sitio o Link de Descarga (No es necesario escribir http://):', 'descarga')?>
    <?php echo form_input(array('name'=>'descarga', 'id'=>'descarga', 'size'=>'70'))?>

    <?php echo form_submit ('enviar','Enviar')?>
    <?php echo form_close() ?>
</div>
        </div>
        <div class="clr"></div>
    </div>
</div>