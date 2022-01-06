<?php

phpinfo();
echo "test form.php";

    if(isset($_post['submit']))
    {
        $name = $_post['name'];
        
        
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "user";
        $password = "St0p-Danger";
        $dbname = "argonautes";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO list (id, name) VALUES ('0', '$name')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>
