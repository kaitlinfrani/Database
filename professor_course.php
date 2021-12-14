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
            /*$query = "SELECT s.Course_Num, s.Classroom, s.Meeting_Days, s.Beg_Time, s.End_Time, c.Course_Num, c.Course_Title,
                  FROM COURSE_SECTION as s, COURSE as c 
                  WHERE s.P_SSN = '.$SSN.' AND s.Course_Num = c.Course_Num;";*/

           // $result = $link->query($query);

            
            /*$row = $result->mysqli_fetch_assoc();
            echo $row;
            echo "Title: " . $row["Course_Title"]. " - Classroom: " .$row["Classroom"]. " - Meeting days: " . $row["Meeting_Days"]. " - Start time: " . $row["Beg_Time"]. " - End time: " . $row["End_Time"].  "<br>";

            if ($result->num_rows > 0) */
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

            /*
            $SSN = $_POST['SSN'];*/
            
        /*
        $query = "SELECT s.Course_Num, s.Classroom, s.Meeting_Days, s.Beg_Time, s.End_Time, c.Course_Num, c.Course_Title,
                  FROM COURSE_SECTION as s, COURSE as c 
                  WHERE s.P_SSN = '.$SSN.' AND s.Course_Num = c.Course_Num;";
        
        
        $query = "SELECT * FROM COURSE;";


    
        $result = $link->query($query);

        
        $row = $result->mysqli_fetch_assoc();
        echo $row;
        echo "Title: " . $row["Course_Title"]. " - Classroom: " .$row["Classroom"]. " - Meeting days: " . $row["Meeting_Days"]. " - Start time: " . $row["Beg_Time"]. " - End time: " . $row["End_Time"].  "<br>";

        if ($result->num_rows > 0) {
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
        $link->close(); */

        /*
<?php
    $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX', 'cs332t14');
    
    if (!$link) {
        die("ERROR. Unable to connect. ".mysqli_error());
    }
    
    echo "Connected Successfully!";

    $SSN = $_POST["SSN"];


    $query = "SELECT Course_Title, Classroom, Meeting_Days, Beg_Time, End_Time
    FROM COURSE_SECTION as cs, COURSE as c
    WHERE cs.P_SSN = '".$SSN."' and c.Course_Num = cs.Course_Num;";

    $result = $link->query($query);

    if($result) {
        echo "SSN: -".$SSN."<br>";
        while($row = $result->fetch_assoc()) {
            echo "Title: ".$row["Course_Title"]."  Classroom: ".$row["Classroom"]."  Beginning Time: ".$row["Beg_Time"]."End".$row[End_Time];
        }
    }
    else {
        echo "No results";
    }
    mysql_close($link);
?>*/


        ?>
    </body>
</html>
