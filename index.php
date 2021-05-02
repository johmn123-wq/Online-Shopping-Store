
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  

 
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Confpass = mysqli_real_escape_string($connect, $_POST["confirmpassword"]);
           $email = mysqli_real_escape_string($connect, $_POST['email']);
        //   $password = password_hash($password, PASSWORD_DEFAULT);  
        $res= mysqli_query($connect,"select * from users where username='$username' ");
        if(mysqli_num_rows($res)>0){
          echo '<script>alert("username already exists")</script>';  
        }
        else
        {

        if($Confpass==$password){
           $query = "INSERT INTO users(username, password,  email) VALUES('$username', '$password','$email')";  
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
           $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
               $row=mysqli_fetch_array($result);
              
               
                     if($_POST['username']==$username&&$_POST['password']==$password) 
                     {  

                          //return true;  
                          $_SESSION["username"] = $username;  

                        
                       
                          $_SESSION["u_id"] =$row['user_id'];

                         
                            
                          header("location:entry.php");  
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
           <style>
                body{
                     background:url("back_images/1234.jpg");
                     color: white;
                }
           </style>
     
          </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
               
              
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center" style="margin-top:80px">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required/>  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" placeholder="Enter Password" required />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-success"  />  
                     <br />  
                    
                     <p align="center"><a href="index.php" style="color:white;font-size :18px;">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" placeholder="Enter Username" required />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control"  placeholder="Enter Password" required/>  
                     <br /> 
                     <label>Confirm Password</label>  
                     <input type="text" name="confirmpassword" class="form-control"  placeholder="Confirm Password" required/>  
                     <br /> 
                     <label>Enter Email</label>  
                     <input type="email" name="email" class="form-control"  placeholder="Enter email " required/>  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-success" />  
                     <br />  
                     <p align="center"><a href="index.php?action=login" style="color:white;font-size:18px">Login</a></p>  
                </form> 
            
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>