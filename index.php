<?php
 class producto{
    //definicion de atributos
    public float $precio;
    public string $nombre;
    public bool $disponible;

    //definicion de metodos
    public function mostrarNombreProducto(){
        echo "El nombre del producto es: ";
        echo $this ->nombre;
    }
    public function mostraPrecioProducto(){
        echo "El precio es: ";
        echo $this ->precio;
    }
    public function mostraDisponibilidadProducto(){
        
        echo $this ->disponible;
    }
 }

 //creacion de un objeto
 $producto1 = new producto();
 $producto1 ->nombre ="Mesa";
 $producto1 ->precio = 500;
 $producto1 ->disponible = true;

 echo "<pre>";
 var_dump($producto1);
 echo "<pre>";

 $producto1 ->mostrarNombreProducto();
 echo"<br>";
 $producto1 ->mostraPrecioProducto();


 $producto2 = new producto();
 $producto2 ->nombre ="Silla";
 $producto2 ->precio = 100;
 $producto2 ->disponible = true;

 echo "<pre>";
 var_dump($producto2);
 echo "<pre>";

 $producto2 ->mostrarNombreProducto();
 echo"<br>";
 $producto2 ->mostraPrecioProducto();