
<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("location:login.php");
}
$data = file_get_contents('C:\xampp\htdocs\gaming\user.json');
$array = json_decode($data, true);
?>