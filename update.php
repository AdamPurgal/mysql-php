<?php
  $con = mysqli_connect("localhost","root","","moja_baza");

  // Check connection
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
  } else {
    echo "CONNECTION OK";
  }
$sql = "SELECT * FROM users";

$result = mysqli_query($con,$sql);

echo '<table border="1">';
while($row = mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['imie'] . "</td>";
    echo "<td>" . $row['nazwisko'] . "</td>";
    echo "<td>" . $row['wiek'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<button>DODAJ</bytton>
<form style="display:none">
<input name="imie">
<input name="nazwisko">
<input name="wiek">
<input type="submit" value="DODAJ">
</form>