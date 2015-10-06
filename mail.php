<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>dark Mail</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
  
	<body>
	<b>dark Mailer</b><br/>
	<form method="post" action="mailaction.php">
	<table>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" name="nm" size="20" />
			</td>
		</tr>
		<tr>
			<td>
				Last Name:
			</td>
			<td>
				<input type="text" name="ln" size="20"  />
			</td>
		</tr>
		<tr>
			<td>
				e-mail:
			</td>
			<td>
				<input type="text" name="em" size="20" />
			</td>
		</tr>
		<tr>
			<td>
				Your Message Here:
			</td>
		</tr>
		</table>
		<textarea name="msg" row="5" cols="50">your message here</textarea><br/>
		<input   type="submit" name="sbmt" Value="Send" />
    </form>   
    </center>
  </body>
</html>
