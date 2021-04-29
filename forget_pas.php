<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  
if(!isset($_SESSION['username']))
header('location:index.html?action=login'); 

 if(isset($_POST["forgetpass"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
          
        //   $password = password_hash($password, PASSWORD_DEFAULT);  
      
        
        if($Confpass==$password){
           
             $res="UPDATE users SET password='$password' where username='$username' ";
             
             if(mysqli_query($connect,$res)&& $_SESSION['username']==$username){
             echo '<script>alert("Password upated successfully")</script>';
             
             }
             else 
             echo "<script>alert('Password is not changed')</script>";
             
          }
          else{
             
             echo "<script>alert(' Password does not match')</script>";
          } 
}
        
 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">PHP Login Registration Script by using password_hash() method</h3>  
                <br />  
                
            
                <h3 align="center">Forget Password</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required />  
                     <br />  
                     <label>New Password</label>  
                     <input type="text" name="password" class="form-control"  placeholder="New Password" required/>  
                     <br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="confirmpassword" class="form-control"  placeholder="Confirm Password" required/>  
                     <br /> 
                     
                     <input type="submit" name="forgetpass" value="Update Password" class="btn btn-info" />  
                    
                </form> 
            
                
           </div>  
      </body>  
 </html>