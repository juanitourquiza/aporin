<html>
<head>
<title><?php echo $titulo?></title>
</head>
<body>
<h1><?php echo $titulo?></h1>
<blockquote>
<p><b><?php echo $descripcion?></b></p>
</blockquote>
<p><?php echo $cuerpo?></p>
<?php foreach ($query->result() as $row): ?>

<p><?php echo $row->cuerpo?></p>
<?php endforeach;?>
</body>
</html>

