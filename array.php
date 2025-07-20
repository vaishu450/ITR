<?php
session_start();

$Employee = array(
    "name" => "Rutuja",
    "id" => 101,
    "salary" => "25,000",
    "mob_no" => "9434667872"
);


$_SESSION["Employee_info"] = $Employee;


echo "<h3>Employee Information</h3>";
echo "Name: " . $_SESSION["Employee_info"]["name"] . "<br>";
echo "ID: " . $_SESSION["Employee_info"]["id"] . "<br>";
echo "Salary: " . $_SESSION["Employee_info"]["salary"] . "<br>";
echo "Mobile No: " . $_SESSION["Employee_info"]["mob_no"] . "<br>";
?>