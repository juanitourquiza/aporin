<?php $i = 0; ?>
<?php

foreach ($latest_messages as $message):
    $id = $message->id;
    $titulo = $message->titulo;
    $categorias_id = $message->categorias_id;
    if ($i % 3 == 0)
        echo '</tr><tr>';
    $i++;
    echo '<td>' . anchor('categorias/index/' . $categorias_id . '/' . $id, $titulo) . '<img src=' . $message->imagen_libro . ' width="150" height="150" title="" /></td>';
?>

<?php endforeach ?>
