<?php
$page = $_POST['page'];
$option1 = strtolower($_POST['option1']);
$option2 = strtolower($_POST['option2']);
$option3 = strtolower($_POST['option3']);
$cl1 = strtolower($_POST['correctLetra1']);
$cl2 = strtolower($_POST['correctLetra2']);
$cl3 = strtolower($_POST['correctLetra3']);


if ($option1 == $cl1 and $option2 == $cl2 and $option3 == $cl3) {

  header("Location: asocianum?id=941826&act=".$page."");
}
else{
  header("Location: asocianum?id=475869&act=".$page."");
}
?>
