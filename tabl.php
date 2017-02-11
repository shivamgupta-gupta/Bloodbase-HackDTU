<?php
$con=mysqli_connect("localhost","root","","Blood");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$loc = $_POST['COL 5'];

$result = mysqli_query($con,"SELECT * FROM 'table 1' WHERE 'COL 5'=$loc ");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['COL 1'] . "</td>";
echo "<td>" . $row['COL 2'] . "</td>";
echo "<td>" . $row['COL 3'] . "</td>";
echo "<td>" . $row['COL 4'] . "</td>";
echo "<td>" . $row['COL 6'] . "</td>";
echo "<td>" . $row['COL 8'] . "</td>";
echo "<td>" . $row['COL 9'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>