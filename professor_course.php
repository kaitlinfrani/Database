<html>
    <body>
        <?php
        
        $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX','cs332t14');
        if (!$link) {
            die('Could not connect: ' . mysqli_error());
        }

        else {
            echo "Connected Successfully.";
        }

        if(isset($_POST['SSN'])) {
            $query = "SELECT * FROM COURSE_SECTION;";

            if ($result = $link->query($query)) {
                // output data of each row
                echo "Hi";
                echo "SSN - " .$SSN. "<br>";
                while($row = $result->fetch_assoc()) {
                    echo "Title: " . $row["Course_Title"]. " - Classroom: " .$row["Classroom"]. " - Meeting days: " . $row["Meeting_Days"]. " - Start time: " . $row["Beg_Time"]. " - End time: " . $row["End_Time"].  "<br>";
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
