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
        //$nombre_usua,$foto,$fech_naci,$corre_electro,$contras
                $c->registro_usuar($_POST['nom_usua'],$_FILES,$_POST['fech_nacimi'],$_POST['corre_usua'],$_POST['clave_usua']);
               
            }  
              
            ?>
        </div>
          
        <!--contenido////////////!-->
     
          <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Registro usuario</h3>
  </div>
  <div class="panel-body">
  
   <form action="" method="post" enctype="multipart/form-data">
        
       
       <div class="row">
           
           <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Nombre:</label>
           <input type="text" name="nom_usua" class="form-control">
       </div>
           </div>
           
        <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Foto de perfil:</label>
           <input type="file" name="foto_usua" class="form-control">
       </div>
           </div>
           
       </div>
       
       <div class="row">
           <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Fecha de nacimiento:</label>
           <input type="date" name="fech_nacimi" class="form-control">
       </div>
           </div>
           
        <div class="col-md-6">
               <div class="form-group">
               <label class="control-label">Correo:</label>
           <input type="text" name="corre_usua" class="form-control">
       </div>
           </div>
       </div>
       
       
       <div class="row">
           <div class="col-md-12">
               <div class="form-group">
               <label class="control-label">Clave:</label>
           <input type="password" name="clave_usua" class="form-control">
       </div>
           </div>
       </div>
       
       
       
         
       
       <button type="submit" class="btn btn-success" name="btn">Registrarse</button>
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
  

