<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $cnum = $_POST["coursenum"];
        
        //Output the course information
        $query = "SELECT Course_Num, Section_Num, Classroom, Meeting_Days, Beg_Time, End_Time, Seat_Capacity
        FROM COURSE_SECTION
        WHERE Course_Num = '".$cnum."';";
        
        $result = $link->query($query);

        //Does a check to make sure the data inputted is correct, if not, it will output "0 results"
        if ($result->num_rows > 0) {
            echo "<h1>Course Information</h1>";
            echo "Course Number Inputted: ".$cnum;
            echo "<p></p>";
            while($row = $result->fetch_assoc()) {
                echo "<table border = '1'>";
                // Headings
                echo"<tr>";
                echo "<th>Section </th>";
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
            echo "<h2>0 results</h2>";
            echo "<p></p>";
            echo "Please try again by going back to the main page.";
            echo "<p></p>";
            echo "<form action='http://ecs.fullerton.edu/~cs332t14'>";
            echo "<button type='submit' value='MAIN PAGE'>MAIN PAGE</button>";
            echo "</form>";
        }
        
        $result->free_result();
        $link->close();

        ?>
    </body>
</html>

