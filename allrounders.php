<?php
if(isset($_POST['search']))
{
// $nu_of_players=$_POST['nu_of_players'];
// $query="SELECT * from 'data' WHERE 'name' LIKE '%".$nu_of_players."%' ";
// $search_result=filterTable($query);

}
else{
$query = "SELECT * from data";
$search_result=filterTable($query);
}



function filterTable($query){
    $con = mysqli_connect('127.0.0.1','root','','demo');
    $filter_result = mysqli_query($con,$query);
    return $filter_result;

}

?>

<html>

<head>
<link rel="stylesheet" href="styles.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>
Selected Squad
</title>

<style type=text/css>
table{
    border-collapse: collapse;
    width:100%;
    color: black;
    font-family: monospace;
    font-size: 25px;
    text-align: center;
    background-color:gray;

}
h4{

    font-family: monospace;
    font-size: 25px;
    text-align: center;

}



</style>
</head>
<body>

<form action="allrounders.php" method="post">
<input type="text" name="nu_of_players" placeholder="enter the needed number"><br><br>
<input type="submit" name="search" value="Submit"><br><br>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Score</th>
</tr>
<?php while($row=mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['marks'];?></td>
</tr>
<?php endwhile;//end of the loop. ?>
</table>

</form>



</body>


</html>
