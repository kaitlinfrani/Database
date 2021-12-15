<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $cnum = $_POST["coursenum"];
        $snum = $_POST["sectionnum"];
        
        //Output number of students with certain grade
        $query = "SELECT Student_Grade, COUNT(*)
        FROM COURSE_SECTION as s, COURSE as c, ENROLLMENT as e
        WHERE c.Course_Num = '".$cnum."' AND s.Section_Num = '".$snum."' AND 
        c.Course_Num = s.Course_Num AND s.Course_Num = e.Course_Num AND e.Section_Num = s.Section_Num
        GROUP BY e.Student_Grade;";
        
        $result = $link->query($query);

        //Does a check to make sure the data inputted is correct, if not, it will output "0 results"
        if ($result->num_rows > 0) {
            echo "<h1>Number of Students with Grade</h1>";
            echo "Course Number Inputted: ".$cnum."  Section Number Inputted: ".$snum;
            echo "<p></p>";
            while($row = $result->fetch_assoc()) {
                echo "<br>";
                echo "<table border = '1'>";
                // Headings
                echo"<tr>";
                echo "<th>Number of Students </th>";
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
