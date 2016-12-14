<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <title>Framework MVC. Curso 2016/2017</title>
</head>
<body>
<div id="header">
<div id="title">Framework MVC. Curso 2016/2017</div>
<div>
    <a href="../index">Inicio</a>
    <a href="/help">Ayuda</a>
    <a style="float:right;" href="/login">Login</a>
    <a style="float:right;" href="/login/out">Logout</a>
    <a id="user" style="float:right" href="#"><?php echo $_SESSION['user'] ?></a>
</div>
</div>