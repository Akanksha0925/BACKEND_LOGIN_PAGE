<!DOCTYPE html>

<html>
    <head>
       <title>Login</title>
       <link rel="stylesheet" href="main.css1">
    </head> 
    <body>
        <form method="post" action="login.php">
            <h1>Login</h1>
            <div class="textBoxdiv">
                <input type="text" placeholder="Username" name ="username" >
            </div>
            <div></div>
            </div class="textBoxdiv">
                 <input type="password" placeholder="password" name="password">
            </div>
            <input type="submit" value="Login" class="LoginBtn" name="login_Btn" >
            <div class="signup">
                 Don't have an account?
                 </br>
                 <a href="#"> Signup </a>
            </div>
        </form>
    </body>
</html>
$conn=mysqli_connect("localhost", "root","");
 if(isset($_POST['login_Btn'])){
    
    $username=$_POST['username']; 
    $password=$_POST['password']; 
    $sql= "SELECT * FROM websitelogin.logindetails WHERE username ='$username'" ;
    $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)){
         $resultPassword =$row['password'];
          if($password ==$resultPassword){
             header('Location:index.html');
         }else{
            echo "<script> 
                 alert('Login unsuccessful'); 
            </script>";
         }
        }
}

?>
