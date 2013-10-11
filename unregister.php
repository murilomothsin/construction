<?php
$erro = false;
if(isset($_GET['email'])){
	include("class/oConn.php");
	$_GET['email'] = mysql_real_escape_string($_GET['email']);
	$queryDelete = "DELETE FROM emails WHERE hash = '".$_GET['email']."'";
	if(!mysql_query($queryDelete))
		$erro = true;
}else{
	$erro = true;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>SysUp</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
	body {
		background-color: #3AA7FE;
	}
	.box {
		color: #ff2c2c;
		position: absolute;
		left: 35%;
		top: 30%;
		min-height: 40%;
		width: 30%;
		background-color: #EFEFEF;
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
	if($erro)
		$msg = '<h4>Erro ao remover registro!</h4><p>Ocorreu um erro ao se tentar remover o registro, limpe o cache de seu navegador e tente novamente!</p>';
	else
		$msg = '<h4>Registro removido com sucesso!</h4><p>Lamentamos que esteja partindo!</p>';
	?>

	<div class="box">
		<br /><br /><br /><br />
		<?php echo $msg; ?>
	</div>
</body>
</html>
