
<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <div class="article">
              <!--h2><span>Busqueda</span></h2-->
                <div class="search">
                    <form id="form" name="form" method="post" action="#">
                        <!--input type="text" id="autocomplete" name="autocomplete" size="50" maxlength="150" /-->
                        <input type="text" id="autocomplete" name="autocomplete" size="50" maxlength="150" style="font-family:arial; font-weight:bold; font-size:15pt; width:400px; height:50px;">
                        <!--input name="q" type="text" class="keywords" id="textfield" maxlength="100" value="Buscar..." /-->
                        <!--input type="text" name="q" id="q" /--> 
                        <input type="button" value="Buscar" id="buscar" name="buscar" style="font-family:arial; font-weight:bold; font-size:15pt; width:120px; height:50px;" />
                        <!--/span-->
                    </form>
                </div>
                <!--p>Libros Recientes:</p-->
                <div class="resultado">
                    <div id="main_content">
                        <table border="0" cellpadding="2" cellspacing="1" >
                            <?php $i=0; ?>
                            <tr>
                                <?php foreach($latest_messages as $message):
                                    $id=$message->id;
                                    $titulo=$message->titulo;
                                    $categorias_id=$message->categorias_id;
                                    $imagen=$message->imagen_libro;
                                    if ($imagen=="")$imagen="http://img3.imageshack.us/img3/6807/imagenotfoundt.gif";
                                    if($i%3 == 0) echo '</tr><tr>';
                                    $i++;
                                    echo '<td>'.anchor('categorias/index/'.$categorias_id.'/'.$id,$titulo).'<img src='.$imagen.' width="150" height="150" title="" /></td>';
                                    ?>

                                <?php endforeach  ?>
                            </tr>
                        </table>
                    </div>
                    <div id="more_button">
                        m&aacute;s
                    </div>
                </div>
                
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>