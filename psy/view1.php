<style>
body {
  background-image: url('huh.jpg');
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<h1 style="text-align: center;"><span style="color: #ffffff;">LIST OF BOOKS</h1>
<p>&nbsp;</p>
<table class="table" style="height: 20px; width: 15px; border-color: white; border-style: solid; background-color: white; margin-left: auto; margin-right: auto;" border="dotted" cellspacing="5" cellpadding="5"><caption>&nbsp;</caption>
<thead>
<tr>
<th>ISBN</th>
<th>BOOKNAME</th>
<th>AUTHOR NAME</th>
<th>GENRE</th>
</tr>
</thead>
<tbody>
    <?php
    //Database connection
$host="localhost";
$dbusername="root";
$dbpassword="2004";
$dbname="libsy";


// Create connection
$conn =  mysqli_connect($host,$dbusername,$dbpassword,$dbname);

$sql="select * from books;";
$result=mysqli_query($conn,$sql);

if(!$result){
    die("invalid query:" . $conn->error);
}
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>" . $row["isbn"]."</td>
<td>" . $row["bookname"]."</td>
<td>" . $row["author_name"]."</td>
<td>" . $row["genre"]."</td>
</tr> ";

}


?>
</tbody>
</table>
</body>
</html>