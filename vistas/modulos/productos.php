 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        Administrar productos
      

      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Administrar productos</li>

      </ol>
    </section>

    
    <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
           
         Agregar producto

         </button>

         </div>

        
        <div class="box-body">
         
        <div class="box-body">
       
       <table class="table table-bordered table-striped table-responsive tablas">

        <thead>
          
          <tr>
            
            <th style="width:10px">#</th>
            <th>Imagen</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Stock</th> 
            <th>Precio de compra</th>
            <th>Precio de Venta</th>
            <th>Agregado</th>
            <th>Acciones</th>

      </tr>

        </thead>
         
         <tbody>
           
          <tr>
         
         <td>1</td>   
         <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td> 
         <td>0001</td> 
         <td>Ibuprofeno El ibuprofeno de venta libre se utiliza para reducir la fiebre y cefalea</td> 
         <td>Genericos</td> 
         <td>20 unidades</td> 
         <td>$2.000</td> 
         <td>$3.000</td>
         <td>2022-21-07 05:10:00</td>

         <td>
           
           <div class="btn-group">
             
             <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

             <button class="btn btn-danger"><i class="fa fa-times"></i></button>

           </div>

         </td> 

    </tr>
  
          <tr>
         
         <td>1</td>   
         <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td> 
         <td>0001</td> 
         <td>Ibuprofeno El ibuprofeno de venta libre se utiliza para reducir la fiebre y cefalea</td> 
         <td>Genericos</td> 
         <td>20 unidades</td> 
         <td>$2.000</td> 
         <td>$3.000</td>
         <td>2022-21-07 05:10:00</td>
         
         <td>
           
           <div class="btn-group">
             
             <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

             <button class="btn btn-danger"><i class="fa fa-times"></i></button>

           </div>

         </td> 

    </tr>
  
          <tr>
         
         <td>1</td>   
         <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td> 
         <td>0001</td> 
         <td>Ibuprofeno El ibuprofeno de venta libre se utiliza para reducir la fiebre y cefalea</td> 
         <td>Genericos</td> 
         <td>20 unidades</td> 
         <td>$2.000</td> 
         <td>$3.000</td>
         <td>2022-21-07 05:10:00</td>
         
         <td>
           
           <div class="btn-group">
             
             <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

             <button class="btn btn-danger"><i class="fa fa-times"></i></button>

           </div>

         </td> 

    </tr>



         </tbody>
     


       </table>   
       

           </div>

         
        
      </div>
     

    </section>
    
      
       </div>
  

  <!-- ========================
    MODAL PARA AGREGAR PRODUCTOS
    ====================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

       <!-- ========================
   CABEZA DEL MODAL
    ====================-->

      <div class="modal-header" style="background:#001f3f; color:white ">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Producto</h4>

      </div>


 <!-- ========================
    CUERPO DEL MODAL
    ====================-->
      <div class="modal-body">

        <div class="box-body">
          
       <!--ENTRADA PARA EL CODIGO-->

            <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-code"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo" required>
            </div>

          

            </div>
 
            <!--ENTRADA PARA LA DESCRIPCION-->

             <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoDescripcion" placeholder="Ingresar descripcion" required>
            </div>



            </div>

 
            <!--ENTRADA PARA SELECCIONAR CATEGORIA-->

           
             <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-th"></i></span>

             <select class="form-control input-lg" name="nuevaCategoria">
               
               <option value="">Seleccionar categoria</option>

                   <option value="Infantil">Infantil</option>

                   <option value="Ortopedia">Ortopedia</option>

                   <option value="Higiene bucal y corporal">Higiene bucal y corporal</option>
                     
                   <option value="Cosmetica y Dietetica">Cosmetica y Dietetica</option>

                   <option value="Natural">Natural</option>

             </select>
            
            </div>



            </div>

             <!--ENTRADA PARA STOCK-->

             <div class="form-group">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-check"></i></span>

              <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Cantidad disponible" required>
            </div>



            </div>

             <!--ENTRADA PARA PRECIO DE COMPRA-->

             <div class="form-group row">

              <div class="col-xs-6">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

              <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>
            </div>


            </div>
           

             <!--ENTRADA PARA PRECIO DE VENTA-->

            <div class="col-xs-6">

            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

              <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de Venta" required>
            </div>

             <br>

              <!--CHECK BOX PARA PORCENTAJE-->

             <div class="col-xs-6">
               
                 <div class="form-group">
                   
                    <label> 

                        <input type="checkbox" class="minimal porcentaje" checked>
                     Utilizar Porcentaje
                    </label>

                 </div>

             </div>
              
              <!--ENTRADA PARA PORCENTAJE-->

            <div class="col-xs-6" style="padding:0">
              
               <div class="input-group">
                 
                 <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

               <span class="input-group-addon"><i class="fa fa-percent"></i></span>

               </div>

            </div>


              </div>

            </div>

            <!--ENTRADA PARA SUBIR IMAGEN-->


             <div class="form-group">

           <div class="panel">SUBIR IMAGEN</div>

           <input type="file" id="nuevaImagen" name="nuevaImagen">


             <p class="help-block">Peso maximo de la imagen 2MB</p>

             <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
           
            </div>

        </div>

      </div>

       <!-- ========================
  PIE DE PAGINA DEL MODAL
    ====================-->

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar producto</button>

      </div>

    </form>

    </div>

  </div>

</div>