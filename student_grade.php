<html>
    <body>
        <?php
        
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        else {
            echo "Connected Successfully.<br><br>";
        }

        if(isset($_POST['CWID'])) {
            $query = "SELECT * FROM ENROLLMENT;";
            /*$query = "SELECT 'Classroom', 'Meeting_Days', 'Beg_Time', 'End_Time', 'Course_Title',
            FROM COURSE_SECTION as CS, COURSE as C
            WHERE CS.P_SSN = '.$SSN.' AND CS.Course_Num = C.Course_Num ;";*/

           // $result = $link->query($query);

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
            }

        ?>
    </body>
</html>
