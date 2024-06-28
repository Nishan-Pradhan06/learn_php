<?php
echo"for each loop<br>";
$age=array("nishan"=>21,"isha"=>19);
foreach($age as $key)
echo"$key<br>";

echo "<table border='1'>";
echo "<tr> <th>name</th> <th>age</th> </tr>";
foreach($age as $key=>$val){
    echo"<tr>";
    echo"<td>$key</th>";
    echo"<td>$val</th>";
    echo"</tr>";
}
echo "</table>";
?>