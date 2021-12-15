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

        if(isset($_POST['SSN'])) {
            //$query = "SELECT * FROM COURSE_SECTION WHERE P_SSN = '123456789';";
            $query = "SELECT Classroom, Meeting_Days, Beg_Time, End_Time, Course_Title
            FROM COURSE_SECTION as CS, COURSE as C
            WHERE CS.P_SSN = '".$SSN."' AND CS.Course_Num = C.Course_Num;";

           // $result = $link->query($query);

            if ($result = $link->query($query)) {
                while($row = $result->fetch_assoc()) {
                    echo "<table border = '1'>";
                    // Headings
                    echo"<tr>";
                    echo "<th>Title </th>";
                    echo "<th>Classroom </th>";
                    echo "<th>Meeting Days </th>";
                    echo "<th>Beginning Time </th>";
                    echo "<th>End Time </th>";
                    echo"</tr>";

                    //Details
                    echo"<tr>";
                    echo "<td>".$row["Course_Num"]."</td>";
                    echo "<td>".$row["Classroom"]."</td>";
                    echo "<td>".$row["Meeting_Days"]."</td>";
                    echo "<td>".$row["Beg_Time"]."</td>";
                    echo "<td>".$row["End_Time"]."</td>";
                    echo "</table>";
                }
            }

            else {
                echo "0 results";
            }
            
            //$result->free_result();
            //$link->close();
            }
            $result->free_result();
            $link->close();
        ?>
    </body>
</html>
