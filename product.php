
<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?>  
 <?php
 
if(isset($_POST['addtocart'])){
    echo "kdknknf";
    header("location:product_details.php");    
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
          </style>
         
        </head>  
      <body> 
          <div method="post">

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




<style>

.sidebar {
  float: left;
  width: 20%;
  height: 940px; /* only for demonstration, should be removed */
  background: #282828;
  color: white;
  padding: 40px;
}

.content{
  float: left;
  width: 80%;
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

<div class="navsec">
  
  <div class="sidebar" >

  <h1 class="font-weight-bold"> Catagories</h1><br>
  <dl?>

  <dt>  <a class="navbar-brand" href="#"> Electronics</a>   </dt><br>
  <dd class="navbar-brand"> HP </dd>
  <dd class="navbar-brand"> sony </dd>
  <dd class="navbar-brand"> hawai </dd>
  <dd class="navbar-brand">  Samsung </dd>
  
</dl>

<br>
<dl>

<dt> <a class="navbar-brand" href="#"> Furnitures</a>   </dt><br>
  <dd class="navbar-brand">Asley</dd>
  <dd class="navbar-brand">Kartell</dd>
  <dd class="navbar-brand">Raymous & Flanigan</dd>

</dl>
 
    
  
   </div>

   <script>
    function search(v) {
  reset();

  var out = document.querySelectorAll('img:not([alt*="' + v + '"])');
  [].forEach.call(out, function(x) {
    x.style.display = 'none';
  });
}

function reset() {
  [].forEach.call(document.querySelectorAll('img'), function(x) {
    x.removeAttribute('style');
  });
}
</script>

  <div class="content">

       <div class="row">

      

            <div class="column">
               
            
             <img src=images/bedroom-furniture-250x250.jpg alt="furniture"> 
             <img src=images/asian-furniture-250x250.jpg alt="furniture"> 
             <img class="resize " src=images/dress_shirt_PNG.png alt="menclothes">
             <img class="resize" src=images/7475-ladies-casual-dresses-summer-two-colors-pleated.jpg alt="womanclothes">
           </div>
          
            
       <div class="column">
            
           

             <input type="submit" name="addtocart" value="Add tocart" class="btn btn-danger"  style="margin-right: 145px" /> 
             
          
              <button type="button" class="btn btn-danger" style="margin-right:144px"  > Add to cart </button>
          
              <button type="button" class="btn btn-danger" style="margin-right:145px"   > Add to cart </button>
              <button type="button" class="btn btn-danger" style="margin-right:142px"   > Add to cart </button>
           
      </div>


      <div class="column">
               
    
    <img class="resize" src=images/f4.jpg alt="furniture"> 
    <img class="resize" src=images/product051.png alt="electronics"> 
    <img class="resize" src=images/pm13.jpg alt="menclothes"> 
    <img  class="resize" src=images/pt5.jpg alt="menclothes"> 
    
   
      </div>
            
              
      <div class="column">
              
  
                <button type="button" class="btn btn-danger" style="margin-right: 145px"  > Add to cart </button>
            
                <button type="button" class="btn btn-danger" style="margin-right:144px"   > Add to cart </button>
            
                <button type="button" class="btn btn-danger" style="margin-right:145px"   > Add to cart </button>
                <button type="button" class="btn btn-danger" style="margin-right:142px" > Add to cart </button>
             
        </div>
           

        <div class="column">
               
    
              
               <img class="resize" src=images/http___pluspng.com_img-png_iphone-6s-png-iphone-6s-gold-64gb-1000.png alt=electronics> 
               <img class="resize" src=images/product03.png alt="electronics"> 
               <img class="resize" src=images/ipad2.jpg alt="electronics"> 
              
                 </div>
                       
                         
                 <div class="column">
                         
             
                           <button type="button" class="btn btn-danger" style="margin-right: 145px"   > Add to cart </button>
                       
                           <button type="button" class="btn btn-danger" style="margin-right:144px"   > Add to cart </button>
                       
                           <button type="button" class="btn btn-danger" style="margin-right:145px"   > Add to cart </button>
                         
                        
                   </div>
     
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


</div>
      </body>  
 </html>  
 