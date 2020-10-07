!Doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Imago Dei Design</title>
<link rel="stylesheet" href="main.css">
<div class="header">
<a href="index.php"><img src="images/imago.jpg" height="125"  width="125"/></a>
<h1>Imago Dei Design</h1>
</div>
</head>
<body>
<div class="topNav">
<nav class="myNav" >
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="store.php">Store</a></li>
<li><a href="contact.php">Contact</a></li></th>
<form>
<input class="searchBox" type="text" placeholder="Search" />
<button class="searchButton">Search</button>
</form>
</ul>
</nav>
<div class="dropMenu">
<span class="dropButton" onclick="dropMenu()">Menu</span>
<div id="myDropmenu" class="dropContent">
<a href="settings.php">Settings</a>
<a href="about.php">About</a>
<a href="profile.php">Profile</a>
</div>
</div>
<div class="welcome">
<h1>Welcome</h1>
</div>
<div class="loginForm">
<form action="" method="GET">
<input  class="user" type="text" name="username" placeholder="Username"/><br>
<input  class="password" type="password" name="password" placeholder="Password" /><br>
<button class="loginButton">Login</button><a href="register.php">Register</a>
</form> 
</div>
<div class="sideNav">
<table class="sideTable">
<tr><th>Other Links</th></tr>
<ul>
<tr><td><li><a href="https://www.facebook.com/imagodeidesign2020">Imago FB</a></li>
<li><a href="">Tutorials</a></li>
<li><a href="">Projects</a></li></td></tr>
</ul>
</table>
</div>
<div>
<p>this is a test.</p>
</body>
<div class="footer">
<footer>
<?php echo date("Y");?> Copyright. 
</footer>
</div>
<script src="functions.js"></script>
</html
