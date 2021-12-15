<html>
    <body>
        <?php
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        $SSN = $_POST["SSN"];
        
        //Output the courses taught by the professor
        $query = "SELECT Course_Title, Classroom, Meeting_Days, Beg_Time, End_Time
        FROM COURSE_SECTION as s, COURSE as c 
        WHERE s.P_SSN = '".$SSN."' AND s.Course_Num = c.Course_Num;";
        
        //links query to website if correct values are inputted
        $result = $link->query($query);

        //Does a check to make sure the data inputted is correct, if not, it will output "0 results"
        if ($result->num_rows > 0) {
            echo "<h1>Courses Taught by Professor</h1>";
            echo "SSN Inputted: ".$SSN;
            echo "<p></p>";
            while($row = $result->fetch_assoc()) {
                //Creates Table
                echo "<table border = '1'>";
                
                //Headings
                echo"<tr>";
                echo "<th>Title </th>";
                echo "<th>Classroom </th>";
                echo "<th>Meeting Days </th>";
                echo "<th>Beginning Time </th>";
                echo "<th>End Time </th>";
                echo"</tr>";

                //Details
                echo"<tr>";
                echo "<td>".$row["Course_Title"]."</td>";
                echo "<td>".$row["Classroom"]."</td>";
                echo "<td>".$row["Meeting_Days"]."</td>";
                echo "<td>".$row["Beg_Time"]."</td>";
                echo "<td>".$row["End_Time"]."</td>";
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

