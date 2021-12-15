<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $CWID = $_POST["CWID"];
        
        //Output courses and grades of the student
        $query = "SELECT Student_CWID, Course_Num, Student_Grade
        FROM ENROLLMENT
        WHERE Student_CWID = '".$CWID."';";
        
        $result = $link->query($query);

        //Does a check to make sure the data inputted is correct, if not, it will output "0 results"
        if ($result->num_rows > 0) {
            echo "<h1>Courses and Grades of Student</h1>";
            echo "CWID Inputted: ".$CWID;
            echo "<p></p>";
            while($row = $result->fetch_assoc()) {
                echo "<table border = '1'>";
                // Headings
                echo"<tr>";
                echo "<th>Course </th>";
                echo "<th>Grade </th>";
                echo"</tr>";

                //Details
                echo"<tr>";
                echo "<td>".$row["Course_Num"]."</td>";
                echo "<td>".$row["Student_Grade"]."</td>";
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
