 <?php
    $login=0;
    $invalid=0;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `registration`WHERE username='$username' and password='$password'";
        
        $result=mysqli_query($link,$sql);
        if($result)
        {
            $num=mysqli_num_rows($result);
            if($num>0)
            {
                $user=1;
                echo "Login Successful";
                $login=1;
                // session_start();
                // $_SESSION['username']=$username;
                // header('location:home.php');
                
            }else{
                //echo "Invalid username or password";
                $invalid=1;
            }
        }
    }
?>
<?php
if($login)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>You are successfully logged in!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?> 
<?php
if($invalid)
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Something went wrong!</strong>Invalid username or password!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?> 

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <title>login page</title>
  </head>
  <body>
    <h3 style="text-align:center;"><b>Login Page</b></h3>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label" >Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="enter your username or email id">
    
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

  </body>
</html>