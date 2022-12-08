<?php
	session_start();
	require 'includes/config.php';
	require 'includes/clients_functions.php';

	$pets = [];
	$pets = getPets();
	if(count($pets)>0)
	{
		echo "100 100";
	}
	else
	{
		echo "na2es";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin page</title>
	<style>
		html{
			height: 100%;
		}
		#topbar{
			color: white;
			height: 100px;
			background-color: dodgerblue;
			text-align: center;

		}
		#srchbar{
			background-color:  whitesmoke;
			margin-top: 32px;
			width: 350px;
			height: 35px;
			/* border: solid 0px black; */
			/* box-shadow: 3px 3px 50px black; */
			border: solid 5px black;
		}
		#srchbar::placeholder{
			color: black;
			opacity: 0.2;
			position: relative;
			left: 10px;
		}
		#srchbtn{
			color: black;
			width: 100px;
			height: 47px;
			display: inline;
			background-color: whitesmoke;
			border: solid 5px black;
			border-radius: 0px;
			/* box-shadow: 3px 3px 10px black; */
		}
		/* #srchcntnt{
			border: solid 2px black;
			display: flexbox;
			height: inherit;

			
		} */
	</style>
</head>
<body>
	<div id="topbar">
		<div id="srchcntnt">
		<input id="srchbar" type="text" name="searchbar" placeholder="search the pet">
		<input id="srchbtn" type="submit" name="search" value="Search">
		</div>
	</div>
	<div>
		<figure>
						<!--image of the pet-->
			<figcaption><!--pet information --></figcaption>
		</figure>
	</div>
</body>
</html>