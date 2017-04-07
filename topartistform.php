<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.footerholder {
    background: none repeat scroll 0 0 transparent;
    bottom: 5;
    position: fixed;
    text-align: center;
    width: 100%;
}

.footer {
	color:#333333;
	font-family:Oswald;
	font-style:bold;
    background: none repeat scroll 0 0 transparent;
    margin: auto;
}
a{
	color:white;
}
a:link {
	text-decoration:none;
}
a:visited {
	text-decoration:none;
}
a:hover {
	text-decoration:none;
}
a:active {
	text-decoration:none;
}
h1 	{
		font-family: 'Oswald', sans-serif; 
		color: white;	
	}
.heading
	{
		margin: auto;
		width: 100%;
		text-align: center;
		padding-top: 20px;
		padding-bottom: 20px;
		background-color: #333333;
	}
.button 
	{
	background-color: #333333;
    color: white;
    border: 2px solid #333333;
	-webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
	padding: 10px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	}
.button:hover 
	{
	background-color: #FFFFFF;
    color: black;
	border: 2px solid #505050;
	}
</style>
<head style="background-color:white">
<div class="heading">
<h1> <a href="main.php" title="That Track Though">That Track Though</a></h1>
</div>
</head>
<body>
<form action="topartist.php" method="GET"><br>
<h4>Enter the country:</h4>
<input type="text" placeholder="e.g. IN for India" name="country">
<h4>Enter the number of artists:</h4>
<input type="text" placeholder="1,2,3... 100" name="nartist">
<br><br>
<input class="button" type="submit" value="Go" name="go">
</form>
<br>
<br>
Can't find your country's 2-digit code? Check <a style=text-decoration:underline href="http://data.okfn.org/data/core/country-list" target=_blank> this link </a> for more info.
</body>
<div class="footerholder">
	<div class="footer">
Find Vinayak on &nbsp <a style="color:#505050" href="https://www.facebook.com/profile.php?id=100002222005081" title="Vinayak's Facebook" target=_blank> <img border="0" alt="Vinayak's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="Vinayak's GitHub" target=_blank> <img border="0" alt="Vinayak's GitHub" src="gh.png" width="20px" height="20px"></a>
&nbsp | &nbsp Find Deepansh on &nbsp <a style="color:#505050" href="https://www.facebook.com/DeepanshKhurana" title="Deepansh's Facebook" target=_blank> <img border="0" alt="Deepansh's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/DeepanshKhurana" title="Deepansh's GitHub"target=_blank> <img border="0" alt="Deepansh's GitHub" src="gh.png" width="20px" height="20px"></a>
</div>
</div>
</html>

