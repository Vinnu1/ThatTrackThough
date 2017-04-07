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
.h
{
	color: #333333;
	font-weight:bold;
}
.error
{
	font-size:20px;
	font-weight:bold;
	color: #ff0000;
}
</style>
<head style="background-color:white">
<div class="heading">
<h1> <a href="main.php" title="That Track Though">That Track Though</a></h1>
</div>
</head>
<body>
<br>
<h2 style=font-family:Oswald> Top Tracks </h2>
<br>
<?php
function get_artist($country,$pg_size){
    $data = file_get_contents("http://api.musixmatch.com/ws/1.1/chart.tracks.get?page=1&page_size=".$pg_size."&country=".$country."&apikey=your_musixmatch_api_key&&format=xml");
    $soap = simplexml_load_string($data);
    $i=0;
    for($i=0;$i<$pg_size;$i++)
	{
		$song=$soap->body->track_list->track[$i]->track_name;
		$artist=$soap->body->track_list->track[$i]->artist_name;
    echo ($i+1).". "."<span class=\"h\">".$artist."</span>"."<strong> - </strong>"."<span class=\"h\">".$song."</span>"."<br><br>"; 
	}
}
if(!empty($_GET["nsongs"]))
{
$a=$_GET["country"];
$b=$_GET["nsongs"];
if($b<=0 || $b>100)
echo "<span class=\"error\">"."Error! Tracks should be in the range 0-100."."</span>";
if($b>0 && $b<=100)
$data=get_artist($a,$b);
}
else 
if(isset($_GET['go']))
echo "<span class=\"error\">"."Error! Please enter all the details."."</span>";
?>
</body>
<div class="footerholder">
	<div class="footer">
Find Vinayak on &nbsp <a style="color:#505050" href="https://www.facebook.com/profile.php?id=100002222005081" title="Vinayak's Facebook" target=_blank> <img border="0" alt="Vinayak's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="Vinayak's GitHub" target=_blank> <img border="0" alt="Vinayak's GitHub" src="gh.png" width="20px" height="20px"></a>
&nbsp | &nbsp Find Deepansh on &nbsp <a style="color:#505050" href="https://www.facebook.com/DeepanshKhurana" title="Deepansh's Facebook" target=_blank> <img border="0" alt="Deepansh's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/DeepanshKhurana" title="Deepansh's GitHub"target=_blank> <img border="0" alt="Deepansh's GitHub" src="gh.png" width="20px" height="20px"></a>
</div>
</div>
</html>

