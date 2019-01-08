<?php
/**
 * Created by IntelliJ IDEA.
 * User: sanu-vithanage
 * Date: 11/30/18
 * Time: 10:38 AM
 */

$userName = $_POST['userName'];
$password = $_POST['passWord'];

$_SESSION['login']=$_POST['userName'];

//echo var_dump($_POST['userName'],$_POST['passWord']);
//
//if ($userName == "kasunviduranga.kv@gmail.com" && $password == "kasun") {
//    if (!isset($_COOKIE["user"])) {
//       setcookie("user","IJSE",time()+24*60*50);
//        header("");
//        $_SESSION['login']=$_POST['userName'];
//    } else {
//        echo "there is session for user";
//        echo "<br>";
//        echo var_dump($_SESSION);
//        $_SESSION['login']=$_POST['userName'];
//    }
////    header("Location:dashboard.php");
//} else {
//    header("");
//    $_SESSION['login']=$_POST['userName'];
//}
