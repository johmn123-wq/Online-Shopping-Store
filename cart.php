<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.html?action=login");
  
}
?>
  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
    <style>
        
.table-container{
    padding :32px;
    font-family:"Roboto", sans-serif;
    margin-right:100px;
    margin-left:100px;
}

.table-container h2.table-heading{
    text-align: center;
    text-transform:uppercase;
    font-size: 24px;
    margin-bottom:32px;
    border-bottom: 1px solid #eee;
    padding-bottom: 8px;
}

.table-container table{
    width:100%;
    background:#fff;
    color: #222;
    padding: 24px;
    box-shadow: 5px 8px 15px -8px rgba(0,0,0,0.4);
     border-collapse: collapse;
}

.table-container table thead tr{
  background: #222;
  color: #fff;
}

.table-container table td,
.table-container table th{
    padding:16px 32px;
    text-align:center;
}


.table-container table tr{
    border-bottom : 1px solid #eee;
}
    </style>
</head>
<body>
  
   <div class="table-container">

     <h2 class="table-heading"> Welcome to cart</h2>
   
   <table>
   <thead>
   
   <th>Product</th>
   <th>Description</th>
   <th>Price($)</th>
   <th>quantity</th>
   
   </thead>
   
         <tbody>
   
        
           <?php
           $total=0;
             $conn=mysqli_connect("localhost","root",'','test');
             $res=mysqli_query($conn,"select * from product,cart where pro_id=p_id  ");
             if(mysqli_num_rows($res)>0){

                    

                    while($row=mysqli_fetch_array($res)){
                             
                        $pro_name=$row['p_name'];
                        $pro_image=$row['p_image'];
                        $pro_price=$row['p_price'];
                        $userid= $row['user_id'];

                      
                         if($_SESSION['u_id']==$userid){
                            $total+=$pro_price;
                        echo "
                        
                       <tr>
                        <td> <img src='images/$pro_image' style='width:100px;height=100px;'>$pro_name </td>
                        <td style='widthL:500px'> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</td>
                        <td> $pro_price</td>
                        <td> <input type='number' name='qty' value='1' style='width:40px'/></td>
                       </tr>
                        
                        ";
                         }
                       
                         
                    }
                    
                    echo "Total Amount: ".$total. "$";
                    echo" 
                    <a href='Transaction.php'> <button class='btn btn-warning'> Buy </button></a>
                    ";

             }
             ?>




   
        </tbody>
   
   
   </table>
   </div>
  

</body>
</html>