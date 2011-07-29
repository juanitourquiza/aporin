<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
              <!--h2><span>Busqueda</span></h2-->
                <div class="search">
                    <form id="form" name="form" method="post" action="#">
                        <!--span-->

                        <input type="text" id="autocomplete" name="autocomplete" size="50" maxlength="150" />
                        <!--input name="q" type="text" class="keywords" id="textfield" maxlength="100" value="Buscar..." /-->
                        <!--input name="b" type="image" src="<?php echo base_url()?>/static/images/search.gif" class="button" /-->
                        <!--input type="text" name="q" id="q" /--> <input type="button" value="Buscar" id="buscar" />

                        <!--/span-->

                    </form>
                </div>
                <?php
                ?>
                <div class="resultado">
                <table border="0" cellpadding="2" cellspacing="1" >
                    <?php $i=0; ?>
                    <tr>
                        <?php foreach($results->result() as $dato):
                            $id=$dato->id;
                            $titulo=$dato->titulo;
                            $categorias_id=$dato->categorias_id;
                            $imagen=$dato->imagen_libro;
                            if ($imagen=="")$imagen="http://img846.imageshack.us/img846/1610/sinimagen.jpg";
                            if($i%3 == 0) echo '</tr><tr>';
                            $i++;
                            echo '<td>'.anchor('categorias/index/'.$categorias_id.'/'.$id,$titulo).'<img src='.$imagen.' width="150" height="150" title="" /></td>';
                            ?>

                        <?php endforeach  ?>
                    </tr>
                </table>
                <?php echo $this->pagination->create_links(); //Imprime la numeración de páginas ?>
        </div>

            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>
