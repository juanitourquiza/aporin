<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css" media="screen">
        div.exito{
         background-color: #C2FFAF;
         border: 1px solid #2A7F0F;
         margin-bottom: 5px;
         padding: 15px;
         width: 400px;
        }
    </style>
  </head>
  <body>
      <div class="exito">
          El formulario se ha enviado correctamente!
          El nombre es: <?php echo $nombre ?><br>
          El password es <?php echo $password ?>
      </div>
      <?php echo anchor('formulario','Volver al formulario') ?>
  </body>
</html>