<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> PRODUCTOS </h1>
            <p>Ingresa los datos para registrar un producto nuevo </p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Productos</li>
              <li><a href="#"><?=$titulo?> Productos </a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=producto&a=Guardar">
                      <fieldset>
                        <legend><?=$titulo?> Producto</legend>
                        <div class="form-group">
                            <input class="form-control" name="id" type="hidden"value="<?=$p->getPro_id()?>">


                            <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                          <div class="col-lg-10">
                          <input required class="form-control" name="Nombre" type="text" placeholder="nombre Producto"value="<?=$p->getPro_nombre()?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Referencia">Referencia</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Referencia" type="text" placeholder="Referencia"value="<?=$p->getPro_ref()?>"> 
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Precio">Precio</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Precio" type="number" placeholder="Precio"value="<?=$p->getPro_precio()?>"> 
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Peso">Peso</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Peso" type="number" placeholder="Peso"value="<?=$p->getPro_peso()?>"> 
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Categoria">Categoria</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Categoria" type="text" placeholder="Categoria"value="<?=$p->getPro_categoria()?>"> 
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Stock">Stock</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Stock" type="number" placeholder="Stock"value="<?=$p->getPro_stock()?>"> 
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>