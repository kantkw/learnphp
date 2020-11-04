<?php
echo $_POST["gender"];

include_once("connection.php");

switch($_POST["role"]){
    case "Pupil":
        $role=0;
        break;
    case "Teacher":
        echo"asd"
    case "Other":
        $role=1;
        break;
}
?>