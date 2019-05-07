<html>
<head>
</head>
<body>
<p>In The Caddy Administration Log In</p>
<?php echo validation_errors('<div class="message errormsg"><p>', '</p></div>');
$attributes = array('id' => 'loginform', 'name' => 'loginform');
echo form_open('/admin/index/login/', $attributes);
 ?>
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" id="txtusername" name="txtusername"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" id="txtpassword" name="txtpassword"></td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="submit" id="btnlogin" value="Log In">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
