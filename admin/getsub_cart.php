<?php
// $q = $_GET['q'];

// include "connect.php";


// $sql="SELECT * FROM food_cat WHERE categories_title = '".$q."'";
// $result = mysqli_query($con,$sql);

// echo "<select name='scat' class='text'>";
// while($row = mysqli_fetch_array($result)) {
  
//   echo "<option value='" . $row['sub_cat'] . "'>". $row['sub_cat'] ."</option>";
  
// }
// echo "</select>";

?>

<?php
$q = $_GET['q'];

include "connect.php";

$sql = "SELECT id, categories_title, sub_cat FROM food_cat WHERE categories_title = '".$q."'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "<select name='scat' class='text'>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['sub_cat'] . "'>" . $row['sub_cat'] . "</option>";
    }
    echo "</select>";
} else {
    echo "No subcategories found for the selected category.";
}

mysqli_close($con);
?>




