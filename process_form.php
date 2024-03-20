<?php

if($_POST["btnMsg"]=="msg")
{
$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin");
$name = $_POST["name"];
$email = $_POST["email"];
$subject = filter_input(INPUT_POST,"subject", FILTER_VALIDATE_INT);
$message = $_POST["message"];
$sql = "INSERT INTO client (name, email, subject, message)";
}
// if(!$conn)
// {
//     echo "connection error:";
//     exit;
// }

// echo "connection successful";

// $sql = pg_query($conn, "SELECT * FROM client");
// while($row=pg_fetch_object($sql))
// {
//     echo "<br/>".$row->name." ".$row->email." ".$row->subject." ".$row->message. " <br/>";
// }
// pg_close($conn);