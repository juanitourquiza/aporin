<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrando el Resultado</title>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#buscar").click(function(){
            $.get("<?php echo base_url(); ?>index.php/ajax/buscar/"+$("#q").val(),{}, function(data){
                $(".resultado").html(data);
            });
        });
    });
</script>
</head>
<body>
<form>
    <input type="text" name="q" id="q" /> <input type="button" value="Buscar" id="buscar" />
</form>
<div class="resultado">

</div>
</body>
</html>
