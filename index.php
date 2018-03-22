<?PHP
include('./head.php');
session_start();
?>

  <body>
      <?PHP
      include_once "../codex/codex.php";
       $c=new Conexion();
      
      if(isset($_SESSION['nombreUsua']) ){
         require "./nav2_princ.php";  
      }else{
          require "./nav_princ.php";  
      }
        
          
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
                $resul=$c->verificando_usua($_POST['usua']);
               
            }  
              
            ?>
        </div>
          
        <!--contenido////////////!-->
     
         <h3>Articulos recientes</h3>
         <p>Contenido</p>
         <br> <br>
          <?php 
          $articulos=$c->alt_arti_reg();
          if($articulos != ''){
            $num=mysqli_num_rows($articulos);    
          }else
          {
              echo("No hay datos");
          }
          if(isset($num) && $num > 0){
            for($i=0;$i< $num;$i++){
              $datos=mysqli_fetch_array($articulos);
          ?>
          
          <div class="thumbnail">
 <table class="table table-striped table-hover ">
      
      <tbody>
        <tr>
          <td><?php echo("Titulo:"."     ".$datos['titulo']); ?></td>
          
        </tr>
        
        <tr>
          <td>
          
        <img src="<?php echo($datos['imagen']); ?>" width="300" height="280" ></td> 
        </tr>
        
        <tr>
          <td><?php echo("Descripcion breve:"." ".$datos['descrip_brev_cont']); ?></td>
          
        </tr>
        
        <tr>
          <td><?php echo("Contenido: "."  ".$datos['contenido']); ?></td>
          
        </tr>
        
        <tr>
          <td><img src="<?php echo($datos['foto']); ?>" width="100" height="100" ></td>
          <td><?php echo("Autor:".$esp="   ".$datos['nombre']); ?></td>
          <td><?php echo("Me gustas: ".$esp="     ".$datos['cantid_megus']); ?></td>
          <td><?php echo("No me gustas: ".$esp="  ".$datos['cantid_no_megus']); ?></td>
          
        </tr>
        
        </tbody> 
          </table>
          
          </div>
          
          
          
            <?php  
          }  
          }
          
          ?>
          
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
  

