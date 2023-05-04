<?php
class Producto {
    public string $nombre;
    public int $precio;
    public bool $disponible;

    public function __Construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    public function mostrarProducto() {
        echo "El Producto es: $this->nombre . y su precio es de:" . $this->precio;
    }

}    
   
$producto = new Producto( 'Tablet', 200, true);

$producto->mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

?>