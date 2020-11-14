<?php

$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');

mysqli_select_db($con,'cricketsquadselector');

$sql="SELECT Name,Type,Wickets from t20balling ORDER BY Wickets DESC";

$results=mysqli_query($con,$sql);


?>

<html>

<head>
<link rel="stylesheet" href="styles.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>
T20 Balling
</title>

<style type=text/css>

h4{

    font-family: monospace;
    font-size: 25px;
    text-align: center;

}
 </style> 
</head>

<body>

<header id="header" class="alt">
				<div class="logo"><a href="index.php">Cricket Squad Selector</a></div>
				<a href="index.php" class="button">Home</a>
                <a href="t20batting.php" class="button">Batting Squad-T 20</a>
                <a href="performances.php" class="button">Overall Performances</a>
				
</header>
<!-- <section id="banner2"> -->
<h4>Bowling Squad - T 20</h4>


<table>
<tr>
<th>Name</th>
<th>Type</th>
<th>Wickets</th>
</tr>
<?php
while($squad=mysqli_fetch_assoc($results)){
    echo "<tr>";

    echo "<td>".$squad['Name']."</td>";
    echo "<td>".$squad['Type']."</td>";
    echo "<td>".$squad['Wickets']."</td>";

    echo "</tr>";



}//end while


?>

</table>





<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: PRATHIBHA</p>
				</div>
			</footer>

</body>











</html>