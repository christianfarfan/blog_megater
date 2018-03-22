<?PHP
include('./head.php');
?>

  <body>
      <?PHP
      include_once "../codex/codex.php";
       $c=new Conexion();
      
      
      require "./nav_princ.php";    
          
      ?> 
        <br>
      

<div class="container"> 
  <div class="row">
      <div class="col-md-1"> 
      

          
      
      <!--////////////////!-->
      </div>
      <div class="col-md-9">
          <div id="_MSG_">
           <?php 
            if(isset($_POST['btn'])){
          $c->logueo($_POST['usuario'],$_POST['clave']);
               
            }  
              
            ?>
        </div>
          
        <!--contenido////////////!-->
     
          <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Iniciando session</h3>
  </div>
  <div class="panel-body">
  
   <form action="" method="post">
        
        <div class="row">
           
           <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Usuario:</label>
           <input type="text" name="usuario" class="form-control" placeholder="Usuario">
       </div>
           </div>
           
        <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Clave:</label>
           <input type="password" name="clave" class="form-control" placeholder="Clave">
       </div>
           </div>
           
       </div>
       
        <button type="submit" class="btn btn-primary" name="btn">Iniciar session</button>
   </form>
  </div>
</div>
          
         
          
       <!--contenido////////////!-->
          
      </div>
      <div class="col-md-2">
 
      
      </div>
      </div><!-- /row -->
    </div> <!-- /container -->
      
    <script src="../js/categoria.js">// coloca  tu ruta en src del archivo javascript requerido para validar (../js/tuarchivo.js)</script> 
      

<?PHP

 ob_end_flush();
  include('./footer.php');    
?>
  

