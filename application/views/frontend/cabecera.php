<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $titulo?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()?>/static/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>/static/css/screen.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>static/css/jquery.treeview.css" rel="stylesheet" type="text/css" />

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


<script type="text/javascript" src="<?php echo base_url()?>static/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>static/js/arial.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>static/js/cuf_run.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>static/js/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>static/js/jquery.treeview.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24782107-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<script type="text/javascript">
$(document).ready(function() {
	$(function() {
		$( "#autocomplete" ).autocomplete({
			source: function(request, response) {
                                $.ajax({ url: "<?php echo site_url('autocomplete/suggestions'); ?>",
				data: { term: $("#autocomplete").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 2
		});
	});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#buscar").click(function(){
            $.get("<?php echo base_url(); ?>index.php/home/buscar/"+$("#autocomplete").val(),{}, function(data){
                $(".resultado").html(data);
            });
        });
    });
</script>

<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
		})

	</script>

<script type="text/javascript">
	$(document).ready(function(){
	var num_messages = <?php echo $num_messages ?>;
	var loaded_messages = 0;
		$("#more_button").click(function(){
			loaded_messages += 10;
			$.get("index.php/home/get_messages/" + loaded_messages, function(data){
				$("#main_content").append(data);

			});
			if(loaded_messages >= num_messages - 10)
			{
				$("#more_button").hide();
				//alert('hide');
			}
		})
	})
</script>

<link rel="stylesheet" href="<?php echo base_url();?>static/css/main.css" type="text/css" />

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
          <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
          <!--li><a href="support.html">Support</a></li-->
          <!--li class="active"><a href="http://hackeruna.com/portafolio/" target="_blank">Portafolio</a></li>
          <li class="active"><a href="http://hackeruna.com/del-autor/" target="_blank">Del Autor</a></li-->
          <li class="active"><a href="<?php echo base_url()?>index.php/como">¿Como funciona?</a></li>
          <li class="active"><a href="<?php echo base_url()?>index.php/colaborar">Colaborar</a></li>
          <li class="active"><a href="http://hackeruna.com/contacto/" target="_blank">Contacto</a></li>
        </ul>
        <div class="clr"></div>
      </div>
      <div class="header_img">
    <h2>Leer,compartir,aportar <span>Informaci&oacute;n</span> </h2>
    <p>Bienvenidos <a href="<?php echo base_url()?>index.php/home">ap<span>orin</span>.com</a> este proyecto nace con la idea de ser un lugar de consulta de informaci&oacute;n. Se puede subir cualquier documento libre (sin copyright) puede ser libros, textos, ezines, papers, etc. Disfruten!!!</p>
        <div class="clr"></div>
      </div>
    </div>
  </div>