<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LABORATORIO 1 </title>
    <?php require_once "menu.php";?>
  </head>
  <body>
      <div class="container">
<div class="row justify-content-center">
<div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3> NUEVO CLIENTE</h3>
    <hr>
    <form method="post" action="recibe_post.php">
        <div class="form-group">

            <label for="Codigo">Codigo</label>
            <input id="Codigo" class="form-control" type="text" Name="Codigo" autocomplete= "off">
        </div>
        
         <div class="form-group">
         <label for="Nombres">Nombres</label>
          <input id="Nombres" class="form-control" type="text" name="Nombres" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="Apellidos">Apellidos</label>
             <input id="Apellidos" class="form-control" type="text" name="Apellidos" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="Dui">DUI</label>
             <input id="Dui" class="form-control" type="text" name="Dui" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="Direccion">Direccion</label>
             <input id="Direccion" class="form-control" type="text" name="Direccion" autocomplete= "off">
         </div>
        
         <div class="form-group">
             <label for="Telefono">Telefono</label>
             <input id="Telefono" class="form-control" type="text" name="Telefono" autocomplete= "off">
         </div>
         <br>
         <button class="btn btn-primary" type="submit">enviar</button>
    </form>
</div>
              
 
                      
                 
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div> 
    
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>