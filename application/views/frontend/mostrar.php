        <table border="0" cellpadding="2" cellspacing="1" >
        <?php $i = 0; ?>
            <tr>
        <?php
          foreach ($latest_messages as $message):
          $id = $message->id;
          $titulo = $message->titulo;
          $categorias_id = $message->categorias_id;
          $idioma = $message->idioma;
          $tamano = $message->tamano;
          $numero_paginas = $message->numero_paginas;
          $resumen = $message->resumen;
          $resumenR = substr($resumen, 0, 350) . "...";
          //Permite mostrar distribucion igual al index
          //if($i%3 == 0) echo '</tr><tr>';
          $i++;
          echo '<tr>';
          echo '<td colspan=3>' . anchor('categorias/index/' . $categorias_id . '/' . $id, $titulo);
          echo ' - ' . $idioma;
          echo ' - ' . $tamano;
          echo ' - # páginas' . $numero_paginas . '</td>';
          echo '</tr>';
          echo '<tr>';
          echo '<td colspan=2>' . $resumenR . '</td>';
          echo '</tr>';
          echo '<tr><td>&nbsp;<tr>';
        ?>
        <?php endforeach ?>
            </tr>
        </table>
