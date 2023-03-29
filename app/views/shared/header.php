<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title><?= $data ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
		    <a class="navbar-brand" href="/Main/index">Links</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link" href="/User/index">Log In</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="/User/register">Register</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="/User/profile">Profile</a>
			        </li>
			        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Main
				          </a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="/Main/logUser">Write your name in LogBook</a></li>
			            <li><a class="dropdown-item" href="/Main/viewUserLog">View LogBook</a></li>
			            <li><a class="dropdown-item" href="/Main/index">Index</a></li>
			            <li><a class="dropdown-item" href="/Main/index2">Index 2</a></li>
			            <li><a class="dropdown-item" href="/Main/Greetings/Nicole">Greet User</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div>
	  		</div>
		</nav>

	<div class="container">
		<?php
			if(isset($_GET['success']))
			{
				echo '<div class="alert alert-success" role="alert">'.$_GET['success'].'</div>';
			}

			if(isset($_GET['error']))
			{
				echo '<div class="alert alert-danger d-flex align-items-center" role="alert">'.$_GET['error'].'</div>';
			}
		?>