<?php
require_once "../../config/config.php";

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

   if (!$link)
   {
       die("Could not connect: " . mysqli_connect_error());
   }

   $sql = "INSERT INTO ContactSubmissions (firstName, lastName, companyName, contactReason)
    VALUES ('$firstName', '$lastName', '$companyName', '$problemWithProduct')";

    if (mysqli_query($link, $sql))
    {
        echo ("New Record Created!");
    }
    else
    {
        echo ("Error: " . $sql . "<br>" . mysqli_error($link));
    }

    $mysqli_close($link);
?>