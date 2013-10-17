<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>SysUp</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<style type="text/css">
	body {
		background-color: #3AA7FE;
	}
	.box {
		position: absolute;
		left: 30%;
		top: 30%;
		min-height: 40%;
		width: 40%;
		background-color: #F0F0F0;
		padding: 5px;
		/*border: 1px solid #CCC;*/
		border-radius: 5pt;
		display: table-cell;
		vertical-align: middle;
		text-align: center;
		-webkit-box-shadow: 0px 0px 2px 2px #0183ea;
		-moz-box-shadow: 0px 0px 2px 2px #0183ea;
		box-shadow: 0px 0px 2px 2px #0183ea;
	}

	.box:hover {
		-webkit-box-shadow: 0px 0px 2px 2px #3aa7fe;
		-moz-box-shadow: 0px 0px 2px 2px #3aa7fe;
		box-shadow: 0px 0px 2px 2px #3aa7fe;
		-webkit-transition: all 1s ease;
		-o-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-ms-transition: all 1s ease;
		-kthtml-transition: all 1s ease;
		transition: all 1s ease;
	}


	</style>

</head>
<body>
	<?php
	if(isset($_GET['email'])){
		if($_GET['email'] == 'ok')
			$msg = '<i class="icon-ok icon-2x" style="float: left; margin: 5px;"></i><strong>Muito bom!</strong><br />Seu interesse é muito importante, agora você irá receber novidades e ficará sabendo sempre que houver uma atualização em nosso sistema!';
		else
			$msg = '<i class="icon-remove icon-2x" style="float: left; margin: 5px;"></i><strong>Erro ao cadastrar Email!</strong><br />Parece que algo deu errado no cadastro de seu e-mail, tente limpar o cache de seu navegador e tente novamente!';
	?>
		<center>
			<div class="alert alert-dismissable alert-info" style="width: 75%;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<?php echo $msg; ?>
			</div>
		</center>
	<?php
	}
	?>

	<div class="box">
		<img src="img/logo.png" style="width: 200px;">
		<hr style="border-bottom: 1px #CCC solid;">
		<p>
			Estamos construindo um novo site e uma nova ideia de serviços para web. <br /><br />Para conhecer mais do nosso trabalho cadastre-se e recebe novidades via e-mail.
		</p>
		<br><br><br><br>
		<span class="text-info">10% - Criando conceitos</span>
		<div class="progress" style="background-color: #CCC; width: 80%; margin-left: 10%;">
			<div class="progress-bar progress-bar-info" style="width: 10%"></div>
		</div>
		<form action="email.php" method="post" enctype="multipart/form-data" onsubmit="return validaForm();">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-envelope"></i></span>
					<input type="text" name="email" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" name="bt" value="Cadastrar" type="submit">Cadastrar</button>
					</span>
				</div>
			</div>
		</form>
	</div>


</body>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/alert.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44847942-1', 'sysup.us');
  ga('send', 'pageview');

</script>

</html>
