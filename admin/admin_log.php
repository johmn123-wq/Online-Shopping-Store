
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  

 
 if(isset($_SESSION["username"]))  
 {  
      header("location:adminEntry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
           $email = mysqli_real_escape_string($connect, $_POST['email']);
        //   $password = password_hash($password, PASSWORD_DEFAULT);  
        $res= mysqli_query($connect,"select * from admin where adm_name='$username' ");
        if(mysqli_num_rows($res)>0){
          echo '<script>alert("username already exists")</script>';  
        }
        else
        {

        if($Confpass==$password){
           $query = "INSERT INTO admin(adm_name, adm_pass,  adm_email) VALUES('$username', '$password','$email')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           } 
          }
          else{
             
             echo "<script>alert(' Password does not match')</script>";
          } 
       }
        
 }  
 if(isset($_POST["login"]))  
 {  
       
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM admin WHERE adm_name = '$username' and adm_pass = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
               
                     if($_POST['username']==$username&&$_POST['password']==$password) 
                     {  
                          //return true;  
                          $_SESSION["admin"] = $username;  
                          header("location:adminEntry.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
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
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Admin Login</h3>  
                <br />  
                <form method="post">  
                     <label> Admin Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required/>  
                     <br />  
                     <label> Admin Password</label>  
                     <input type="text" name="password" class="form-control" placeholder="Enter Password" required />  
                     <br />  
                     <input type="submit" name="login" value="Admin Login" class="btn btn-info" />  
                     <br />  
                    
                     <p align="center"><a href="admin_log.php">Admin Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Admin Register</h3>  
                <br />  
                <form method="post">  
                     <label> Admin Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required />  
                     <br />  
                     <label> Admin Password</label>  
                     <input type="text" name="password" class="form-control"  placeholder="Enter Password" required/>  
                     <br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="confirmpassword" class="form-control"  placeholder="Confirm Password" required/>  
                     <br /> 
                     <label>Admin Email</label>  
                     <input type="email" name="email" class="form-control"  placeholder="Enter email " required/>  
                     <br />  
                     <input type="submit" name="register" value="Admin Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="admin_log.php?action=login">Admin Login</a></p>  
                </form> 
            
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>