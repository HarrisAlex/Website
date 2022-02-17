<?php
    $firstName = "";
    $lastName = "";
    $companyName = "";
    $problemWithProduct = "";
    
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
       $firstName = format_data($_POST["firstName"]);
       $lastName = format_data($_POST["lastName"]);
       $companyName = format_data($_POST["companyName"]);
       $problemWithProduct = $_POST["contactReason"];
   }

   function format_data($data)
   {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   //Connection
   $connection = mysqli_connect("localhost", "minekpbj_dbwriter", "qdPKWQ++JT7YTuF2#5>}", "minekpbj_contactRequests");

   if (!$connection)
   {
       die("Could not connect: " . mysqli_connect_error());
   }

   $sql = "INSERT INTO ContactSubmissions (firstName, lastName, companyName, contactReason)
    VALUES ('$firstName', '$lastName', '$companyName', '$problemWithProduct')";

    if (mysqli_query($connection, $sql))
    {
        echo ("New Record Created!");
    }
    else
    {
        echo ("Error: " . $sql . "<br>" . mysqli_error($connection));
    }

    $mysqli_close($connection);
?>