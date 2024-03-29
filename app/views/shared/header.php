<!DOCTYPE html>
<html dir="<?= _('ltr') ?>" lang="<?=_('en')?>" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/main.css">
	<script src="/javascript/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title><?= $data ?></title>
</head>
<body>
	<?php $this->view('shared/navigation/navbar'); ?>

	<div class="container">
		<?php
		    if (isset($_GET['success']))
		    {
		    	echo '<div class="alert alert-success" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert"></button> '.$_GET['success'].'</div>';
		    }
		    if (isset($_GET['error']))
		    {
		    	echo '<div class="alert alert-danger" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert"></button> '.$_GET['error'].'</div>';
		    }
		?>