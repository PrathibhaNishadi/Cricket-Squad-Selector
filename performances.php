<html>

<head>
<link rel="stylesheet" href="styles.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>
Performances
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

<?php

$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');

mysqli_select_db($con,'cricketsquadselector');

$sql="SELECT * from odiperformances";

$results=mysqli_query($con,$sql);


?>




<header id="header" class="alt">
				<div class="logo"><a href="index.php">Cricket Squad Selector</a></div>
				<a href="index.php" class="button">Home</a>
                <a href="performances.php" class="button">Overall Performances</a>
				
</header><br><br>
<!-- <section id="banner2"> -->
<h4>ODI PERFORMANCES</h4>
<!-- <a href="#test" class="button">Test</a>
<a href="#t20" class="button">T20</a> -->


<table>
<tr>
<th>Name</th>
<th>Matches</th>
<th>Runs</th>
<th>Highest Score</th>
<th>Batting Average</th>
<th>Hundreds</th>
<th>Wickets</th>
<th>BBI</th>
<th>Five Wickets</th>
<th>Bowling Average</th>
<th>Catches</th>
<th>Stumps Taken</th>


</tr>
<?php
while($squad=mysqli_fetch_assoc($results)){
    echo "<tr>";

    echo "<td>".$squad['Name']."</td>";
    echo "<td>".$squad['Matches']."</td>";
    echo "<td>".$squad['Runs']."</td>";
    echo "<td>".$squad['High Score']."</td>";
    echo "<td>".$squad['Bat Avg']."</td>";
    echo "<td>".$squad['100s']."</td>";
    echo "<td>".$squad['Wickets']."</td>";
    echo "<td>".$squad['BBI']."</td>";
    echo "<td>".$squad['5 wickets']."</td>";
    echo "<td>".$squad['Bowl Avg']."</td>";
    echo "<td>".$squad['Catches']."</td>";
    echo "<td>".$squad['Stumps']."</td>";

    echo "</tr>";



}//end while


?>

</table>
<br><br>


<?php

$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');

mysqli_select_db($con,'cricketsquadselector');

$sql="SELECT * from testperformances";

$results=mysqli_query($con,$sql);


?>


<!-- <section id="banner2"> -->
<h4>TEST PERFORMANCES</h4>
<!-- <a href="#test" class="button">Test</a>
<a href="#t20" class="button">T20</a> -->


<table>
<tr>
<th>Name</th>
<th>Matches</th>
<th>Runs</th>
<th>Highest Score</th>
<th>Batting Average</th>
<th>Hundreds</th>
<th>Wickets</th>
<th>BBI</th>
<th>Five Wickets</th>
<th>Bowling Average</th>
<th>Catches</th>
<th>Stumps Taken</th>


</tr>
<?php
while($squad=mysqli_fetch_assoc($results)){
    echo "<tr>";

    echo "<td>".$squad['Name']."</td>";
    echo "<td>".$squad['Matches']."</td>";
    echo "<td>".$squad['Runs']."</td>";
    echo "<td>".$squad['High Score']."</td>";
    echo "<td>".$squad['Bat Avg']."</td>";
    echo "<td>".$squad['100s']."</td>";
    echo "<td>".$squad['Wickets']."</td>";
    echo "<td>".$squad['BBI']."</td>";
    echo "<td>".$squad['5 wickets']."</td>";
    echo "<td>".$squad['Bowl Avg']."</td>";
    echo "<td>".$squad['Catches']."</td>";
    echo "<td>".$squad['Stumps']."</td>";

    echo "</tr>";



}//end while


?>

</table>

<br><br>




<?php

$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');

mysqli_select_db($con,'cricketsquadselector');

$sql="SELECT * from t20performances";

$results=mysqli_query($con,$sql);


?>





<!-- <section id="banner2"> -->
<h4>T 20 PERFORMANCES</h4>
<!-- <a href="#test" class="button">Test</a>
<a href="#t20" class="button">T20</a> -->


<table>
<tr>
<th>Name</th>
<th>Matches</th>
<th>Runs</th>
<th>Highest Score</th>
<th>Batting Average</th>
<th>Hundreds</th>
<th>Wickets</th>
<th>BBI</th>
<th>Five Wickets</th>
<th>Bowling Average</th>
<th>Catches</th>
<th>Stumps Taken</th>


</tr>
<?php
while($squad=mysqli_fetch_assoc($results)){
    echo "<tr>";

    echo "<td>".$squad['Name']."</td>";
    echo "<td>".$squad['Matches']."</td>";
    echo "<td>".$squad['Runs']."</td>";
    echo "<td>".$squad['High Score']."</td>";
    echo "<td>".$squad['Bat Avg']."</td>";
    echo "<td>".$squad['100s']."</td>";
    echo "<td>".$squad['Wickets']."</td>";
    echo "<td>".$squad['BBI']."</td>";
    echo "<td>".$squad['5 wickets']."</td>";
    echo "<td>".$squad['Bowl Avg']."</td>";
    echo "<td>".$squad['Catches']."</td>";
    echo "<td>".$squad['Stumps']."</td>";

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
