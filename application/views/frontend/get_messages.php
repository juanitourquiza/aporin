<?php $i = 0; ?>
<?php

foreach ($latest_messages as $message):
    $id = $message->id;
    $titulo = $message->titulo;
    $categorias_id = $message->categorias_id;
    $imagen=$message->imagen_libro;
    if ($imagen=="")$imagen="http://img846.imageshack.us/img846/1610/sinimagen.jpg";
    if ($i % 3 == 0)
        echo '</tr><tr>';
    $i++;
    echo '<td>' . anchor('categorias/index/' . $categorias_id . '/' . $id, $titulo) . '<img src=' . $imagen . ' width="150" height="150" title="" /></td>';
?>

<?php endforeach ?>
