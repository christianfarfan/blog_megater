<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
          <img src="../img/Logo_Megaterios_.png" alt="logo_megaterios" style="width:350px;">
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./index.php"><span style="color: black; font-size:20px">Home</span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
       <span style="color: black;font-size:20px">Page 1</span>
         <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><span style="color: black;font-size:20px">Page 1</span></a></li>
          <li><a href="#"><span style="color: black;font-size:20px">Page 1</span></a></li>
          <li><a href="#"><span style="color: black;font-size:20px">Page 1</span></a></li>
        </ul>
      </li>
      <li><a href="#"><span style="color: black;font-size:20px">Page 2</span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><span style="color: black;font-size:20px"><?php echo($_SESSION['nombreUsua']); ?></span></a></li>
      <li><a href="./logaut.php"><span class="glyphicon glyphicon-log-in"></span><span style="color: black;font-size:20px">Cerrar session</span></a></li>
    </ul>
  </div>
</nav>
  
