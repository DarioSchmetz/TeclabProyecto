<?php

include './class/autoload.php';


//$lista_productos = productos::listar();
$lista_categorias = categorias::listar();

include './view/lista_producto.html';



