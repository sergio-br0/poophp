<?php
 class producto{
    //definicion de atributos
    public  $precio;
    public  $nombre;
    public  $disponible;

    //definicion de metodos
    public function mostrarNombreProducto(){
        echo "El nombre del producto es: ";
        echo $this ->nombre;
    }
    public function mostraPrecioProducto(){
        echo "El precio es: ";
        echo $this ->precio;
    }
    public function mostraDisponibleProducto(){
        if($this->disponible){
            echo"El producto esta disponible";
        }else{
            echo"El producto no esta disponible";
        }
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
 echo"<br>";
 $producto1 ->mostraDisponibleProducto();



 $producto2 = new producto();
 $producto2 ->nombre ="Silla";
 $producto2 ->precio = 100;
 $producto2 ->disponible = false;

 echo "<pre>";
 var_dump($producto2);
 echo "<pre>";

 $producto2 ->mostrarNombreProducto();
 echo"<br>";
 $producto2 ->mostraPrecioProducto();
 echo"<br>";
 $producto2 ->mostraDisponibleProducto();