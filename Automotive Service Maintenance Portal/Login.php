<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	<?php
	include('Header.php');
	?>
	<form action="LoginCode.php" method="post">
		<table class="tbl" align="center" class="login-style">
			<tr>
				<td><input type="text" name="txtUsername" placeholder=" Username" Style="width:200px;"/></td>
			</tr>
			<tr>
				<td><input type="password" name="txtPassword" placeholder=" Password" Style="width:200px;"/></td>
			</tr>
			<tr> 
				<td>
					 <select Style="width:200px;" name="ddType">
					  <option value="admin">Admin</option>
					  <option value="customer">Customer</option>
					  <option value="employee">Employee</option>
					</select> 
				</td>
			</tr>
			
			<tr>
				<td><br><input type="submit" name="btnSubmit" value="Login" class="btn_submit"/></td>
			</tr>
		</table>
	</form>

</body>

</html>