<p>Usuarios:</p>
<?php

$this->table->set_heading('ID', 'Usuario', 'Clave', 'Email'); //crea la primera fila de la tabla con el encabezado
$tmp = array ( 'table_open'  => '<table border="0" cellpadding="2" cellspacing="1">' ); //modifica el espaciado
$this->table->set_template($tmp); //aplico los cambios de modificacion anterior

/*ok aca vamos a hacer que el correo tenga un enlace a enviar un mail
con el foreach recorro los resultados de la consulta */

  foreach($results->result() as $dato):
    $array['id'] = $dato->id;
    $array['titulo'] = $dato->titulo;
    $array['cuerpo'] = $dato->cuerpo;
    $array['descripcion'] = mailto($dato->descripcion,$dato->descripcion); //esto genera un link con el mismo nombre.
    $this->table->add_row($array); //agregamos la celda a la tabla por cada iteracion
  endforeach;

echo $this->table->generate(); //cuando termina generamos la tabla a partir del vector
//creamos los links para las paginas
echo $this->pagination->create_links();
?> 
