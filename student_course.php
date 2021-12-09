<html>
<?php

/*$link = mysqli_connect('mariadb', 'cs332t14', '10141854u2y4e2b', 'cs332t14');*/
$link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX', 'cs332t14');

if (!$link) {
    die("ERROR. Unable to connect: ".mysqli_error());
}
else {
    echo "Connected";
}


$cnum = $_POST["Course_Num"];

$query = "SELECT CS.Section_Num, CS.Classroom, CS.Meeting_Days, CS.Beg_Time, CS.End_Time, CS.Seat_Capacity
FROM COURSE_SECTION as CS, ENROLLMENT as E
WHERE CS.Course_Num = $cnum AND CS.Course_Num = E.Course_Num AND CS.Section_Num = E.Section_Num
GROUP BY E.Section_Num;";

$result = $link->query($query);

if ($result->num_rows > 0) {
    echo "Hello";
    while ($row = $result->fetch_assoc()) {
        for ($i = 0; $i < $result->num_rows; $i++) {
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['Section_Num'].'<p>';
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['Classroom'].'<p>';
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['Meeting_Days'].'<p>';
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['Beg_Time'].'<p>';
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['End_Time'].'<p>';
            echo '<tr><td alighn = "left">'.'SECTION: '.$row['Seat_Capacity'].'<p>';
        }
    }
    $result->free_result();
    $link->close();
}

/*echo "<tr>";
        for ($i = 0; $i < count($row); $i++) {
            echo "<td>{$row[$i]}</td>";
        }
        echo "</tr>";

else {
    echo "No data found.";
}*/

?>
</html>
