<?php

$recepient = "<marf.imom>@gmail.com";
$sitename = "Автомагазин";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$messege = "Имя: $name \nТелефон: $phone";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $messege, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>