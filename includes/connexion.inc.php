<?php
$pdo = new PDO('mysql:host=localhost;dbname=micro_blog', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*
$cookie=$_COOKIE['connected'];

$query = "SELECT * FROM utilisateur  where sid=?";
$prep = $pdo->query($query);
$prep= bindValue(1,$cookie);
$prep->execute();

if($prep ->rowcount()==1){
  $login=true;


}
*/
?>
