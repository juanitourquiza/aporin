<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $titulo?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()?>/static/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>/static/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/static/js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/static/js/cuf_run.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <img src="<?php echo base_url()?>/static/images/aporinlogo.png" alt="" />
        <h1><small>  <?php echo $slogan ?> </small></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <!--li><a href="support.html">Support</a></li-->
          <li><a href="http://hackeruna.com/portafolio/">Portafolio</a></li>
          <li><a href="http://hackeruna.com/del-autor/">Del Autor</a></li>
          <li><a href="http://hackeruna.com/contacto/">Contacto</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="header_img">
    <h2>Leer,compartir,aportar <span>Informaci&oacute;n</span> </h2>
    <p>Bienvenidos <a href="home.php">ap<span>orin</span>.com</a> este proyecto nace con la idea de ser un lugar de consulta de informaci&oacute;n. Se puede subir cualquier documento libre (sin copyright) puede ser libros, textos, ezines, papers, etc. Disfruten!!!</p>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <!--h2><span>Busqueda</span></h2-->
          <div class="search">
          <form id="form" name="form" method="post" action="#">
            <span>
            <input name="q" type="text" class="keywords" id="textfield" maxlength="100" value="Buscar..." />
            <input name="b" type="image" src="<?php echo base_url()?>/static/images/search.gif" class="button" />
            </span>
          </form>
        </div>
          <div class="clr"></div>
          
          <div class="clr"></div>
          <?php foreach ($query->result() as $row): ?>

            <p><?php echo $row->cuerpo?></p>
            <?php endforeach;?>
            <!--p>This is a free CSS website template by FreeWebsiteTemplateZ.com. This work is distributed under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to FreeWebsiteTemplateZ.com.</p>
          <p>Maecenas dignissim mauris in arcu congue tincidunt. Vestibulum elit nunc, accumsan vitae faucibus vel, scelerisque a quam. Aenean at metus id elit bibendum faucibus. Curabitur ultrices ante nec neque consectetur a aliquet libero lobortis. Ut nibh sem, pellentesque in dictum eu, convallis blandit erat. Cras vehicula tellus nec purus sagittis id scelerisque risus congue. Quisque sed semper massa. Donec id lacus mauris, vitae pretium risus. Fusce sed tempor erat. </p>
          <p><a href="#">Read more </a></p-->
        </div>
        <!--div class="article" style="padding:5px 20px 2px 20px;">
          <p>Page 1 of 2 <span class="butons"><a href="#">3</a><a href="#">2</a> <a href="#" class="active">1</a></span></p>
        </div-->
        
      </div>
      <div class="sidebar">
        <div class="gadget">
            <h2>Categor&iacute;as</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Base de Datos</a></li>
            <li><a href="#">Programaci&oacute;n</a></li>
            <li><a href="#">Desarrollo Web</a></li>
            <li><a href="#">Software Libre</a></li>
            <li><a href="#">Redes</a></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Novedades</span></h2>
        <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_1.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_2.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_4.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_5.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="<?php echo base_url()?>/static/images/gallery_6.jpg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Licencias</span></h2>
        <p><a href="http://es.wikipedia.org/wiki/Copyleft">Copyleft</a><br />
        <a href="http://es.wikipedia.org/wiki/CreativeCommons">CreativeCommons</a></p>
      </div>
      <div class="col c3">
        <h2><span>Contacto</span></h2>
        <p><a href="http://twitter.com/juanitourquiza">twitter</a><br />
          <a href="http://hackeruna.com/contacto/">e-mail</a></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="footer">
        <p class="lf">&copy; Copyright <a href="hackeruna.com" target="_blank">Juan Urquiza</a>.</p>
      <p class="rf">Layout by Free <a href="http://www.freewebsitetemplatez.com/" target="_blank">Website Templates</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>