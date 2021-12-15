<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $cnum = $_POST["coursenum"];
        $snum = $_POST["sectionnum"];
        
        $query = "SELECT Student_Grade, COUNT(*)
        FROM COURSE_SECTION as s, COURSE as c, ENROLLMENT as e
        WHERE c.Course_Num = '".$cnum."' AND s.Section_Num = '".$sum."' AND c.Course_Num = s.Course_Num AND s.Course_Num = e.Course_Num
        AND s.Section_Num = e.Section_Num;";
        
        $result = $link->query($query);

        if ($result = $link->query($query)) {
            while($row = $result->fetch_assoc()) {
                echo "<table border = '1'>";
                    // Headings
                    echo"<tr>";
                    echo "<th>Students </th>";
                    echo "<th>Grade </th>";
                    echo"</tr>";

                    //Details
                    echo"<tr>";
                    echo "<td>".$row["COUNT(*)"]."</td>";
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
