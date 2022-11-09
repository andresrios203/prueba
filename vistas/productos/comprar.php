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
                    <form class="form-horizontal" method="POST" action="?c=producto&a=ComprarProducto">
                      <fieldset>
                        <legend><?=$titulo?> Producto</legend>
                        <?php if ($p->getPro_stock() > 0){?>
						<div class="form-group">
                            <input class="form-control" name="id" type="hidden"value="<?=$p->getPro_id()?>">
                            <label class="col-lg-2 control-label" for="Nombre">Nombre</label>
                          <div class="col-lg-10">
                          <input required class="form-control" name="Nombre" type="text" readonly="readonly" placeholder="nombre Producto"value="<?=$p->getPro_nombre()?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Stock">Stock</label>
                          <div class="col-lg-10">
                            <input required class="form-control" id="stock" name="Stock" type="number" min="0"  max="<?php echo $p->getPro_stock()?>" placeholder="Stock"> 
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Comprar</button>
                          </div>
                        </div>
						<?php }else{?>
						<legend>No hay unidades disponibles para este producto</legend>
						<?php  }?>
                      </fieldset>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
