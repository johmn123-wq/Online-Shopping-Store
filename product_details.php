
<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?>  
  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          <style>
.header{
    

    text-align:center;
    padding :1px;
    color: white;
  }

  
.sidebar {
  float: left;
  width: 40%;
  height: 940px; /* only for demonstration, should be removed */
  background: #282828;
  color: white;
  padding: 40px;
}

.content{
  float: left;
  width: 60%;
  height: 940px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}
 
 

  .navsec::after {
  content: "";
  display: table;
  clear: both;

}
.resize{
  height: 250px;
  width: 250px;
  background: white;
}

          </style>
         
        </head>  
      <body> 

      <div class="header" style="width:1347px;">  
        <?php
        echo '<h1 align="center" style="background: #0d0d0d">Welcome - '.$_SESSION["username"].'</h1> ';
       

        ?>
     </div>

           <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Shopping Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="entry.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Electronics</a></li>
           
            <li><a class="dropdown-item" href="#">Furnitures</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" onkeyup="search(this.value)" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
               echo 'Welcome - '.$_SESSION["username"].' ';
        ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="index.php">My Profile</a></li>
         
          <li><a class="dropdown-item" href="#">History</a></li>

          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="forget_pas.php">Forget Password</a></li>
          <li>
               <a class="dropdown-item" href="logout.php">Logout</a>
               
               
               
     </li>
        </ul>
      </li>

    </div>
  </div>
</nav>





<div class="navsec">
  
  <div class="sidebar" >

  <h1 class="font-weight-bold"> Catagories</h1><br>
  <dl?>

  <dt>  <a class="navbar-brand" href="#"> Electronics</a>   </dt><br>
  <dd> HP </dd>
  <dd> snoy </dd>
  <dd> hawai </dd>
  <dd> Samsung </dd>
  
</dl>

<br>
<dl>

<dt> <a class="navbar-brand" href="#"> Furnitures</a>   </dt><br>
  <dd>Asley</dd>
  <dd>Kartell</dd>
  <dd>Raymous & Flanigan</dd>

</dl>
 
    
  
   </div>

  
  <div class="content">

       <div class="row">

      
            </div>

           

       </div>

       <div class="container" style="width:500px;">  
                <h3 align="center">
                     PHP Login Registration Script by using password_hash() method
                     
                    </h3>  
                <br />  
                
</div>  
  </div>


</div>



      </body>  
 </html>  
 