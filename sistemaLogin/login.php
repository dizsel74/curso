<!DOCTYPE HTML>
<html>
<HEAD>
<TITTLE> 
<style>
	h1{
		text-align:center;
	}

	table{
		margin:auto;
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	.izq{
		text-align:right;
	}
	.der{
		text-algn:left;
	}
	td{
		text-align:center;
		padding:10px;
	}
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style> 
</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY bgcolor="#CCCCCC">
<H1>INTRODUCE DATOS</H1>

<form action="comprueba_login.php" method="post" name="datos_usuario" id="datos_usuario">
<table>
	<tr>
    	<td class="izq">Login:</TD>
        <td class="der"><input type="text" name="login"></td>
    </tr>
	<tr>
    	<td class="izq">Password:</td>
        <td class="der"><input type="password" name="clave"></td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
    </tr>
</table>
</form>

</BODY>
</html>