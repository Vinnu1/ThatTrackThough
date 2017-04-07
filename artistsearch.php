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
h1 	{
		font-family: 'Oswald', sans-serif; 
		color: white;	
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
.heading
	{
		margin: auto;
		width: 100%;
		text-align: center;
		padding-top: 20px;
		padding-bottom: 20px;
		background-color: #333333;
		
	}
.info
{
	text-align: center-left;
	padding: 30px;
	font-size: 150%;
}
.h
{
	color: #333333;
	font-family:Oswald;
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
<h2 style=font-family:Oswald> Artist Info </h2>
<div class=info>
<?php
function get_artist($name){
    $data = file_get_contents("http://api.musixmatch.com/ws/1.1/artist.search?q_artist=".$name."&page_size=5&apikey=your_musixmatch_api_key&&format=xml");
    $soap = simplexml_load_string($data);
	if($soap->header->available!=0)
	{
    echo "<span class=\"h\">Artist Name: </span>".$soap->body->artist_list->artist->artist_name."<br>";
    echo "<span class=\"h\">Country: </span>".$soap->body->artist_list->artist->artist_country."<br>";
    echo "<span class=\"h\">Rating: </span>".$soap->body->artist_list->artist->artist_rating."<br>";
    echo "<span class=\"h\">Genre: </span>".$soap->body->artist_list->artist->primary_genres->music_genre_list->music_genre->music_genre_name."<br>";
    $k=$soap->body->artist_list->artist->artist_twitter_url;
	if($k!="") echo "<br><a href='".$k."' target='_blank' title='Twitter'>"."<img src='twitter.jpg' alt='Twitter' style='width:96px;height:32px;border:0;border-radius:5px'>"."</a>";
	}
	else echo "<span class=\"error\">"."No such artist found."."</span>"; 
}
if(!empty($_GET["artistname"]))
{
$a=$_GET["artistname"];
$a=str_replace(" ","%20",$a);
get_artist($a);
}
else
	if(isset($_GET['go']))
echo "<span class=\"error\">"."Error! Please enter all the details."."</span>";
?>
</div>
</body>
<div class="footerholder">
	<div class="footer">
Find Vinayak on &nbsp <a style="color:#505050" href="https://www.facebook.com/profile.php?id=100002222005081" title="Vinayak's Facebook" target=_blank> <img border="0" alt="Vinayak's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="Vinayak's GitHub" target=_blank> <img border="0" alt="Vinayak's GitHub" src="gh.png" width="20px" height="20px"></a>
&nbsp | &nbsp Find Deepansh on &nbsp <a style="color:#505050" href="https://www.facebook.com/DeepanshKhurana" title="Deepansh's Facebook" target=_blank> <img border="0" alt="Deepansh's Facebook" src="fb.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/DeepanshKhurana" title="Deepansh's GitHub"target=_blank> <img border="0" alt="Deepansh's GitHub" src="gh.png" width="20px" height="20px"></a>
</div>
</div>
</html>

