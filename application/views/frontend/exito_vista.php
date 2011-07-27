<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">

                <style type="text/css" media="screen">
                    div.exito{
                        background-color: #C2FFAF;
                        border: 1px solid #2A7F0F;
                        margin-bottom: 5px;
                        padding: 15px;
                        width: 400px;
                    }
                </style>
                <div class="exito">
                    El formulario se ha enviado correctamente!
                    El titulo es: <?php echo $titulo ?><br>
                    El editorial es: <?php echo $editorial ?><br>
                    El alojado en: <?php echo $alojado ?><br>
                    Etiquetas: <?php echo $etiquetas ?><br>
                    El idioma: <?php echo $idioma ?><br>
                    Categor&iacute;a: <?php echo $categoria ?><br>
                    Tama&ntilde;o: <?php echo $tamano ?><br>
                    N&uacute;mero de P&aacute;ginas: <?php echo $numero_paginas ?><br>
                    El resumen: <?php echo $resumen ?><br>
                    El link de imagen libro : <?php echo $imagen_libro ?><br>
                    El link para la descarga: <?php echo $descarga ?><br>

                    <?php
                    $data = array(
                            'titulo' => $titulo ,
                            'editorial' => $editorial ,
                            'etiquetas' => $etiquetas,
                            'idioma' => $idioma,
                            'categorias_id' => $categoria,
                            'tamano' => $tamano,
                            'numero_paginas' => $numero_paginas,
                            'resumen' => $titulo.' - '.$resumen,
                            'link_descarga' => $descarga,
                            'imagen_libro' => $imagen_libro,
                            'link_descarga' => $descarga
                    );
                    $this->db->insert('documentos', $data);
                    ?>

                    <?php //$this->db->insert('documentos', $data); ?>

                </div>
                <?php echo anchor('colaborar','Volver al formulario') ?>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>