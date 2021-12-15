<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $cnum = $_POST["coursenum"];
        
         $query = "SELECT Course_Num, Section_Num, Classroom, Meeting_Days, Beg_Time, End_Time, Seat_Capacity
         FROM COURSE_SECTION
         WHERE Course_Num = '".$cnum."';";
        
        $result = $link->query($query);

        if ($result = $link->query($query)) {
            while($row = $result->fetch_assoc()) {
                echo "<table border = '1'>";
                // Headings
                echo"<tr>";
                echo "<th>Sections </th>";
                echo "<th>Classroom </th>";
                echo "<th>Meeting Days </th>";
                echo "<th>Beginning Time </th>";
                echo "<th>End Time </th>";
                echo "<th>Students Enrolled </th>";
                echo"</tr>";

                //Details
                echo"<tr>";
                echo "<td>".$row["Section_Num"]."</td>";
                echo "<td>".$row["Classroom"]."</td>";
                echo "<td>".$row["Meeting_Days"]."</td>";
                echo "<td>".$row["Beg_Time"]."</td>";
                echo "<td>".$row["End_Time"]."</td>";
                echo "<td>".$row["Seat_Capacity"]."</td>";
                echo "</table>";
            }
        }
        else {
            echo "0 results";
        }
        
        $result->free_result();
        $link->close();

        ?>
    </body>
</html>

