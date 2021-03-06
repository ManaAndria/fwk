<!DOCTYPE html>
<html>
<head>
	<title>Framework</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<?php 
	use Auth\Database\Auth;
	use Database\Database;
	$config = require ROOT . "/app/Config/Database.php";
	$db = new Database($config);
	$Auth = new Auth($db);
?>

<div class="container" style="margin-top: 20px;">

	<nav class="navbar navbar-default">
	  <div class="container-fluid">

	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Accueil</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php?page=inscription">Inscription<span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>

			<form class="navbar-form navbar-right" method="post">
				<?php if ($Auth->isConncetd("Mana", "03aout1991")) { ?>
					<button type="submit" class="btn btn-warning">Deconnecter</button>
				<?php } else { ?>
					<button type="submit" class="btn btn-success">Connecter</button>
				<?php } ?>
			</form>

	    </div><!-- /.navbar-collapse -->

	  </div><!-- /.container-fluid -->
	</nav>

	<div>
		<?= $content; ?>
	</div>

	<hr>
	<footer>
		Footer
	</footer>

</div>



<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>