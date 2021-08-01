<?php
include'global/config.php';
include'global/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
 <head>

  <!--EN ESTE MOMENTO BUSCAREMOS EN CODIGO EN BOOTSTRAP PARA AGREGARLO A NUESTRO CODIGO. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
  <--!AHORA INTEGRAREMOS EL CODIGO CSS DEBAJO DEL TITLE-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <--! Y DESPUES INTEGRAREMOS EL CODIGO DE JAVASCRIPT-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


 </head>
 <body>
  <--!DESPUES DE AGREGAR LA EXTENSIONES VAMOS A PROBARLAS.-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Venta De Ilustraciones</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Carrito(0)</a>
            </li>
        </ul>
    </div>
 </nav>
 </br>
 </br>
 <div class="container-fluid">   
    <br>
   <div class="alert alert-success">
       Pantalla de contenido...
       <!--AQUÍ AGREGAREMOS UN BOTON, IR VALIDANDO PORQUE NO SE FUNCIONA EL BOTON-->
       <a href="#" class="badge badge-success">Ver carrito</a>
    
     
    </div>
       <!--DENTRO DEL CONTAINER CREAREMOS UNA COLUMNA CON B-ROW -->
        
       <div class="row">
            <!-- EN ESTE CASO USAREMOS LA CLASE COL QUE NOS PERMITIRA REALIZAR LA DIVISIÓN EN 3 -->
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>           
            
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>           
             <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>            
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>            
            <div class="col-3">
             <div class="card">
                 <!-- AHORA AGREGAMOS CON -B IMG PARA AGREGAR EL CODIGO DE LA IMAGEN-->
                 <img
                  class="card-img-top" 
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLMtgIfmdfCzesT2Vjg2qo_vsnlTHiTuol9Q&usqp=CAU" 
                  alt="Titulo"
                  title="Titulo del producto">
                 <div class="card-body">
                        <span>Titulo del producto</span>
                     <h5 class="card-title">$300.000</h5>
                     <p class="card-text">Description</p>
                     <!--DEBAJO DE LA CLASE CARD-TEXT, CREAREMOS UN BOTON CON B- BTN -->
                     <!--AHORA AGREGAMOS UN NOMBRE Y UN VALOR EN EL BOTON -->
                     <button class="btn btn-primary" 
                     name="btnAccion" 
                     value="Agregar" 
                     type="submit">
                         Agregar al carrito
                        </button>
                 </div>
             </div>
            </div>
        </div>
                
        </div>
    
        
        


</body>
</html>

