<!DOCTYPE html>
<html>
<head>
<style>
header{
	color: Black;
	width:100%;
	margin:1%;
	    font-family: "Times New Roman", Times, serif;
	text-align:center;
	}
body{
	margin: 0px;
	padding: 0px;
	background-color:#808080;
	background-position: center;
	}
.flip3D{ 
	width:240px; 
	height:200px;
	
	margin:2%; 
	float:left; 
	padding-right:10%;
}
.flip3D > .front{
width: 100%;
	height:0;
	grid:auto;
	padding-bottom: 100%;
    border-radius: 50%;
	border:10px solid #cfdcec;
    overflow:hidden;
    
    background: #4679BD; 
    box-shadow: 0 0 3px gray;
}
.flip3D a {
    display:block;
	float:left;
	width:100%;
	padding-top:50%;
    padding-bottom:50%;
	line-height:1em;
	margin-top:-0.5em;
    
	text-align:center;
	color:#e2eaf3;
    font-family:Verdana;
    font-size:1.2em;
    font-weight:bold;
    text-decoration:none;
}
.flip3D:hover > .front{
	background:#30588e;
}
h1{
}
</style>
</head>
<body>
	<header>
	<h1 > Share_4_Care</h1>
	</header>
<div class="flip3D">

  <div class="front"><a href="login.php" flip3D">User</a></div>
</div>
<div class="flip3D">
  <div class="front"><a href="login_admin.php" flip3D">Admin</a></div>
</div>
<div class="flip3D">
  
  <div class="front"><a href="login_ngo.php" flip3D">NGO</a></div>
</div>
</body>
</html>