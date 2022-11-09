<?php

class producto{

    private $pdo;

    private $pro_id; 
    private $pro_nombre;
    private $pro_ref;
    private $pro_precio;
    private $pro_peso;
    private $pro_categoria;
    private $pro_stock;
    private $pro_fecha;

    public function __CONSTRUCT(){
        $this->PDO = BasedeDatos::Conectar();
    }

    public function getPro_id() : ?int{
        return $this->pro_id;
    }

    public function setPro_id(int $id){
        $this->pro_id=$id;
    }
    
    public function getPro_nombre() :?string{
        return $this->pro_nombre;
    }

    public function setPro_nombre(string $nombre){
        $this->pro_nombre=$nombre;
    }

    public function getPro_ref() :?string{
        return $this->pro_ref;
    }

    public function setPro_ref(string $referencia){
        $this->pro_ref=$referencia;
    }

    public function getPro_precio() :?int{
        return $this->pro_precio;
    }

    public function setPro_precio(int $precio){
        $this->pro_precio=$precio;
    }

    public function getPro_peso() :?int{
        return $this->pro_peso;
    }

    public function setPro_peso(int $peso){
        $this->pro_peso=$peso;
    }

    public function getPro_categoria() :?string{
        return $this->pro_categoria;
    }

    public function setPro_categoria(string $categoria){
        $this->pro_categoria=$categoria;
    }

    public function getPro_stock() :?int{
        return $this->pro_stock;
    }

    public function setPro_stock(int $stock){
        $this->pro_stock=$stock;
    }

    public function getPro_fecha() :?string{
        return $this->pro_fecha;
    }

    public function setPro_fecha(string $fecha){
        $this->pro_fecha=$fecha;
    }

    public function Cantidad(){
        try{
            $consulta=$this->PDO->prepare("SELECT SUM(pro_stock) as Cantidad FROM productos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $consulta=$this->PDO->prepare("SELECT * FROM productos;");
            $consulta->execute();
            return $consulta->fetchALL(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Producto $p){
        try{
            $consulta="INSERT INTO productos(pro_nombre,pro_ref,pro_precio,pro_peso,pro_categoria,pro_stock,pro_fecha) VALUES (?,?,?,?,?,?,?);";
            $this->PDO->prepare($consulta)
                    ->execute(array(
                        $p->getPro_nombre(),
                        $p->getPro_ref(),
                        $p->getPro_precio(),
                        $p->getPro_peso(),
                        $p->getPro_categoria(),
                        $p->getPro_stock(),
                        $p->getPro_fecha(),
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta=$this->PDO->prepare("SELECT * FROM productos where pro_id = $id");
            $consulta->execute();
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Producto();
            $p->setPro_id(($r->pro_id));
            $p->setPro_nombre($r->pro_nombre);
            $p->setPro_ref($r->pro_ref);
            $p->setPro_precio($r->pro_precio);
            $p->setPro_peso($r->pro_peso);
            $p->setPro_categoria($r->pro_categoria);
            $p->setPro_stock($r->pro_stock);
            $p->setPro_fecha($r->pro_fecha);
            return $p;
        }catch(Exception $e){
            
            die($e->getMessage());
        }
    
    }

    public function Actualizar(Producto $p){
        try{
            $consulta="UPDATE productos SET
                pro_nombre=?,
                pro_ref=?,
                pro_precio=?,
                pro_peso=?,
                pro_categoria=?,
                pro_stock=?
                WHERE pro_id=?;
            ";

         $this->PDO->prepare($consulta)
                    ->execute(array(
                        $p->getPro_nombre(),
                        $p->getPro_ref(),
                        $p->getPro_precio(),
                        $p->getPro_peso(),
                        $p->getPro_categoria(),
                        $p->getPro_stock(),
                        $p->getPro_id()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Eliminar($id){
        try{
            $consulta="DELETE FROM productos WHERE pro_id=?;";
            $this->PDO->prepare($consulta)
                    ->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}