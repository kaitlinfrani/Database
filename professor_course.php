<?php
    $link = mysqli_connect('mariadb', 'cs332t14', '6nXl2UmX', 'cs332t14');
    
    if (!$link) {
        die("ERROR. Unable to connect. ".mysqli_error());
    }
    
    echo "Connected Successfully!";

    $SSN = $_POST["SSN"];


    $query = "SELECT Course_Title, Classroom, Meeting_Days, Beg_Time, End_Time
    FROM COURSE_SECTION as cs, COURSE as c
    WHERE cs.P_SSN = '$SSN' AND c.Course_Num = cs.Course_Num;";

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
?>
