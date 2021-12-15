<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $CWID = $_POST["CWID"];
        
         $query = "SELECT Student_CWID, Course_Num, Student_Grade
         FROM ENROLLMENT
         WHERE Student_CWID = '".$CWID."';";
        
        $result = $link->query($query);

        if ($result = $link->query($query)) {
            while($row = $result->fetch_assoc()) {
                echo "<table border = '1'>";
                // Headings
                echo"<tr>";
                echo "<th>Courses </th>";
                echo "<th>Grades </th>";
                echo"</tr>";

                //Details
                echo"<tr>";
                echo "<td>".$row["Course_Num"]."</td>";
                echo "<td>".$row["Student_Grade"]."</td>";
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
