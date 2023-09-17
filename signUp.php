<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5d5add3309.js" crossorigin="anonymous"></script>
    <title>Signup</title>
    <style>
      .contain{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(42, 27, 137, 0.8),rgba(229, 218, 240, 0.5)),url("https://tse4.mm.bing.net/th?id=OIP.5xsu5sUmzGyaPs7bMMPU9AHaE8&pid=Api&P=0");
        background-position: center;
        background-size: cover;
        position: relative;
      }
      .form-box{
        width: 90%;
        max-width:450px;
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #fff;
        padding:50px 60px 70px;
        text-align: center;
      }
      .form-box h1{
        font-size:30px;
        margin-bottom: 60px;
        color:#6200ff;
        position:relative;
      }
      .form-box h1::after{
        content:' ';
        width: 30px;
        height:4px;
        background:#3c00a0;
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform:translateX(-50%); 
      }
      .input-field{
        background: #eaeaea;
        margin:15px;
        border-radius:3px;
        display:flex;
        align-items: center;
        max-height: 65px;
        transition: max-height 0.5s;
        overflow: hidden;
      }
      input{
        width:100%;
        background: transparent;
        border:2px;
        padding:18px 15px;
      }
      form p{
        text-align: left;
        font-size: 13px;
      }
      form p a{
        text-decoration: none;
        color: #3c00a0;
      }
      .btn-field{
        width:100%;
        display: flex;
        justify-content: space-between;
      }
      .btn-field input,button{
        flex-basis: 48%;
        background:#3c00a0;
        color:#fff;
        height: 40px;
        border-radius: 20px;
        border:2px;
        outline:0px;
        cursor:pointer;
        transition: background 1s;
      }
      .input-group{
        height:280px;

      }
      .btn-field input.disable{
        background: #eaeaea;
        color:black;
      }
    </style>
  </head>
  <body>
    <div class="contain">
      <div class="form-box">
        <h1 id="title">Sign Up</h1>

        
        <form method="post" action="http://localhost/project/signup/signUp.php">
          <div class="input-form">
            <div class="input-field">
              <input type="text" placeholder="email" name="username" required>
            </div>
            <div class="input-field">
              <input type="password" placeholder="password" name="password" required>
            </div>
          </div>
          <div class="btn-field">
           
            <input type="submit" value="Signup" name="signup" style="background-color: #3c00a0;">
            <button type="button" class="disable" id="loginBtn">Login</button>
            
          </div>

        </form>
      </div>
    </div>
    <script>
      
      document.getElementById("loginBtn").onclick=function(){
        location.href="http://localhost/project/signup/signIn.php";
      }
    </script>
    
  </body>
</html>
<?php
    $success=0;
    $user=0;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql="SELECT * FROM `registration` WHERE email='$username'";
        $result=mysqli_query($link,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0)
            {
                $user=1;
                echo "User already exist";
            }else{
                $sql = "INSERT INTO `registration` (email, password) VALUES ('$username','$password')";
                $result=mysqli_query($link,$sql);
                if($result){
                echo "Data inserted successfully";
                $success=1;
                // <!-- session_start();
                // $_SESSION['username']=$username;
                // header('location:home.php'); -->
                } 
                else{
                    die(mysqli_error($link));
                }
            }
        }
    }
?>
<?php
if($user)
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Oh no sorry!</strong> Sorry! User exists.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?> 
<?php
if($success)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>You are successfully logged in!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?> 