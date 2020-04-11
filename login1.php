<html>
<head>
<meta charset="utf-8"/>
<title>DEFI</title>
<link rel="stylesheet" href="login1.css" type="text/css">
</head>
<body>
<div class="daisson">
 <img src="login.png" class="avatar"/>
 <h1>Welcome</h1>
 <form  method="POST" action="login.html">
 <p>
 Username:
 <?php
 echo $_POST['nom'];
 ?>
 </p><br>
 <p>
 Password:
 <?php
 echo $_POST['motdepasse'];
 ?>
 </p><br>
<a href="login.html"><input type="submit" value="logout" title="cliquez ici pour changer vos informations"/></a>
 </form>
</div>
</body>
</html>