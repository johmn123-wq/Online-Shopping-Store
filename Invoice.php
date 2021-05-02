<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.html?action=login");  
 }  
 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
   
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <!--<div class="logo"><img src="logo1.png"></div>-->
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../entry.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#electronics" >Electronics</a></li>
           
            <li><a class="dropdown-item" href="#section1">Furnitures</a></li>
            <li><a class="dropdown-item" href="#clothing">Clothing</a></li>
          </ul>
        </li>
        <li class="logo"><a class="navbar-brand kol" href="#"><img src="images1/logo-white.png"></a></li>
      </ul>
      
      <li class="nav-item dropdown">
        <a class="log nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Login/ Signup
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../index.php">User Login</a></li>
          <li><a class="dropdown-item" href="../index.php">User Signup</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="../index.php">Admin Login</a></li>
          <li><a class="dropdown-item" href="../index.php">Admin Signup</a></li>
          
        </ul>
      </li>
      
      

    </div>
  </div>

</nav>

<div class="second-nav">
  <h3><b><a href="../entry.php">Home  </a>  <span><i class="fa fa-angle-right"></i>  </span>  <a href="about.php"> Invoice</a></b></h3>
</div>

<div class="text">
  <div class="red">
    <h1>Invoice</h1>
  </div>
</div>

<div class="one">
  <div class="invoice-1">
    <h2>Invoice number</h2>
    <p>126546</p>
  </div>
  <div class="invoice-1">
    <h2>Date of Issue</h2>
    <p>02/05/2021</p>
  </div>
</div>
<br>

<div class="line"></div>
<br><br>

<div class="two">
  <div class="invoice-2">
    <ul>
      <li>BILLED TO</li>
      <li>Client name</li>
      <li>Street address</li>
      <li>city, state, country</li>
      <li>ZIP code</li>
    </ul>
  </div>
  <div class="invoice-2">
    <ul>
      <li>RED STORE</li>
      <li>17-A Chandigarh</li>
      <li>INDIA</li>
      <li>564-555-1234</li>
      <li>redstore@gmail.com</li>
    </ul>
  </div>
</div>

<!-------------------------------------- table --------------------------------------------->
<?php
echo "
<div class='table'>
      <table>
          <tr>
            <th><label>Description</label></th>
            <th><label>Unit Cost($)</label></th> 
            <th><label>Quantity</label></th> 
            <th><label>Amount($)</label></th>   
          </tr>
";
          
           $total=0;
           $Amt=0;
             $conn=mysqli_connect("localhost","root",'','test');
             $res=mysqli_query($conn,"select * from product,cart where pro_id=p_id  ");
             if(mysqli_num_rows($res)>0){

              

                    while($row=mysqli_fetch_array($res)){
                             
                        $pro_name=$row['p_name'];
                        $pro_image=$row['p_image'];
                        $pro_price=$row['p_price'];
                        $pro_qty = $row['qty'];
                        $userid= $row['user_id'];
                    
                        if($_SESSION['u_id']==$userid){

                        $total+=$pro_price;
                        $Amt=$pro_price*$pro_qty;
                        echo "
                        
                       <tr>
                        
                        <td> $pro_name </td>
                        <td> $pro_price</td>
                        <td> $pro_qty </td>
                        <td>$Amt</td>
                        
                       </tr>
                        
                        ";
                    } 
                       
                         
                    }
                    
                  

             }
            


   echo"     
         
      </table>
    </div>

    <div class='total'>
      <h2>Invoice Total</h2>
      <h1><b>$total $</b></h1>
    </div>

    <div class='line'></div>
<br><br>
";
?>
<!-----------------------------brands------------------------------------------------>

  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="images1/logo-godrej.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-oppo.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-coca-cola.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-paypal.png">
        </div>
        <div class="col-5">
          <img src="images1/logo-philips.png">
        </div>
      </div>
    </div>
  </div>

  <!----------------------------------------footer------------------------------------------>

  <div class="footer">
    <div class="container">
      <div class="row" class="kol">
        <div class="footer-col-2">
          <img src="images1/logo-white.png">
          <p>Our purpose is to Sustainably make the pleasure and Benefits of Sports Accessible to the many.</p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright © 2010-2021 Freepik Company S.L. All Rights Reserved.</p>
    </div>
  </div>


</body>
</html>

