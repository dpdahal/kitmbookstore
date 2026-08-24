<?php
require_once 'header.php';
require_once 'connection.php';

if(!empty($_POST)){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $user=mysqli_fetch_assoc($result);
        $_SESSION['auth'] = $user;
        $_SESSION['success'] = "Login successful!";
        header("Location:index.php");
    } else {
        $_SESSION['error'] = "Invalid email or password";
        header("Location:login.php");
    }
}
?>
<h1>Login</h1>
<form action="" method="post">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button>Login</button>
</form>
<?php
require_once 'footer.php';
?>