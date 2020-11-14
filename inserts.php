<html>

<head>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Squad</title>

<style type=text/css>

h5{


    font-size: 25px;
    text-align: center;

}
h2{

font-size: 26px;
text-align: center;

}
 </style>

</head>

<body>
<header id="header" class="alt">
				<div class="logo"><a href="index.php">Cricket Squad Selector</a></div>
				<a href="index.php" class="button">Home</a>
				
</header><br>
<h5>Here are the results for your requested number of players</h5><h5> You can see the squad we selected for all ODI, Test and T 20 match types </h5><br>

<br><br>
<h2><b>ODI SQUAD</b><h2>
<table>
<caption text-align="center">Batsmen</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Batsmen'];
if($get)
{
$show="SELECT  * FROM odibatting WHERE TYPE='Wicketkeeper batsman' OR TYPE='Opening batsman' ORDER BY Runs DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>

</table>


<table>
<caption>Bowlers</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Bowlers'];
if($get)
{
$show="SELECT  * FROM odiballing WHERE TYPE='Bowler' ORDER BY Wickets DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>

</table>



<table>
<caption>All Rounders</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['AllRounders'];
if($get)
{
$show="SELECT odiballing.Name,odiballing.Type,odiballing.Wickets,odibatting.Runs FROM odiballing,odibatting where odiballing.Name=odibatting.Name and odiballing.Type='Allrounder' LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing";
}

?>

</table>

<br><br>
<h2><b>TEST SQUAD</b><h2>

<table>
<caption>Batsmen</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Batsmen'];
if($get)
{
$show="SELECT  * FROM testbatting WHERE TYPE='Wicketkeeper batsman' OR TYPE='Opening batsman' ORDER BY Runs DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>

</table>




<table>
<caption>Bowlers</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Bowlers'];
if($get)
{
$show="SELECT  * FROM testballing WHERE TYPE='Bowler' ORDER BY Wickets DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>

</table>
</div>


<table>
<caption>All Rounders</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['AllRounders'];
if($get)
{
$show="SELECT testballing.Name,testballing.Type,testballing.Wickets,testbatting.Runs FROM testballing,testbatting where testballing.Name=testbatting.Name and testballing.Type='Allrounder' LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing";
}

?>

</table>



<!-- t20squad -->
<br><br>

<h2><b>T 20 SQUAD</b></h2>

<table>
<caption>Batsmen</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Batsmen'];
if($get)
{
$show="SELECT  * FROM t20batting WHERE TYPE='Wicketkeeper batsman' OR TYPE='Opening batsman' ORDER BY Runs DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>

</table>


<table>
<caption>Bowlers</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['Bowlers'];
if($get)
{
$show="SELECT  * FROM t20balling WHERE TYPE='Bowler' ORDER BY Wickets DESC LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing Inputted";
}

?>
</body>
</table>




<table>
<caption>All Rounders</caption>

<tr>
<th>Name</th>
<th>Type</th>
<th>Predicted Wickets</th>
<th>Predicted Runs</th>
</tr>

<?php
$con = mysqli_connect('127.0.0.1','root','','cricketsquadselector');
$get=$_POST['AllRounders'];
if($get)
{
$show="SELECT t20balling.Name,t20balling.Type,t20balling.Wickets,t20batting.Runs FROM t20balling,t20batting where t20balling.Name=t20batting.Name and t20balling.Type='Allrounder' LIMIT $get";
$result=mysqli_query($con,$show);

while($rows=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>";
    echo $rows['Name'];
    echo "</td>";
    echo "<td>";
    echo $rows['Type'];
    echo "</td>";
    echo "<td>";
    echo $rows['Wickets'];
    echo "</td>";
    echo "<td>";
    echo $rows['Runs'];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";

}

}
else{

    echo "Nothing";
}

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
