<?php

require_once "modelos/producto.php";

class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Producto;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/index.php";
        require_once "vistas/pie.php";
    }


	public function Comprar(){
		$titulo="Comprar";
        $p=new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener(intval($_GET['id']));
            $titulo="Comprar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/comprar.php";
        require_once "vistas/pie.php";
	}

    public function FormCrear(){
        $titulo="Registrar";
        $p=new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo="Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/form.php";
        require_once "vistas/pie.php";
    }

    public function ComprarProducto(){
        $p=new Producto();
        if(isset($_POST['id'])){
            
            $p=$this->modelo->Obtener(intval($_POST['id']));

            $stock = intval($p->getPro_stock()) -intval($_POST['Stock']);
            $p->setPro_stock($stock);
            $this->modelo->Actualizar($p);
            
        }
        header("location:?c=producto");
    }

    public function Guardar(){
        $p=new Producto();
        $p->setPro_id(intval($_POST['id']));
        $p->setPro_nombre($_POST['Nombre']);
        $p->setPro_ref($_POST['Referencia']);
        $p->setPro_precio($_POST['Precio']);
        $p->setPro_peso($_POST['Peso']);
        $p->setPro_categoria($_POST['Categoria']);
        $p->setPro_stock($_POST['Stock']);
        $p->setPro_fecha(date("Y-m-d"));

        $p->getpro_id() > 0 ?
        $this->modelo->Actualizar($p)  :
        $this->modelo->Insertar($p);

        header("location:?c=producto");
    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=producto");
    }


}