<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventourist.id</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="main">
   <ul>
       <li><a href="index.php?page=home">HOME</a></li>
       <li><a href="index.php?page=aboutus">ABOUT US</a></li>
       <li><a href="index.php?page=adventourer">ADVENTOURER</a></li>
	   <li><a href="index.php?page=contactus">CONTACT US</a></li>
	   <li><a href="loginadmin.php?page=logout">LOGOUT</a></li>
   </ul> 
</div>

<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'aboutus':
				include "halaman/aboutus.php";
				break;
			case 'adventourer':
				include "halaman/adventourer.php";
                break;
            case 'contactus':
                include "halaman/contactus.php";
                break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
</div>

</body>
</html>


