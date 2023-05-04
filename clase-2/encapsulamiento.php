<?php
class Producto {
    public string $nombre;
    public int $precio;
    public bool $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
    public function mostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
    public function getNombre() : string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}   
    $producto = new Producto( 'Tablet', 200, true);
    echo $producto->nombre;
    echo $producto->getNombre();
    $producto->setNombre('Nuevo Nombre');
    echo $producto->getNombre(); 

    ?>