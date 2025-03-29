<?php
include ('config.php');
if
_SEVERALR ['REQUEST METHOD'
1 == 'POST') I
§username =
$
POST [' username'];
Spassword =
$
POST ['password'];
§email =
$
POST [ 'email'];
// Validate input
if (empty ($username) |1
empty (Spassword) |l
empty (Semail)) {
echo "All fields are
required.";
exit;
｝
// Hash the password
Shashed password =
password
DEFAULT) ;
// Insert into database
§stmt = §conn-

required. ";
exit;
signup php
// Hash the password
Shashed_password =
password
_hash (§password,
PASSWORD
_DEFAULT) ;
// Insert into database
§stmt = §conn-
›prepare (" INSERT INTO users (username, password, email)
VALUES (?, ?, ?) ");
§stmt->bind_param ("sss",
Susername, Shashed password, Semail) ;
if ($stmt->execute ()) {
echo "Registration
successful!";
} else {
echo "Error: " .
§stmt->error;
｝
§stmt->close () ;
｝
$conn->close () ;
?>
<! DOCTYPE html>
<html lang="en">
<head>

?>
sigtDOCTYBE html>
<html lang="en" >
<head>
<meta charset="UTF-8" >
<meta name="viewport"
content="width=device-width, initial-scale=1. 0">
‹title>Sign Up</title> <link rel="stylesheet"
href="style.css">
</head> <body>
<div class="container">
<h2>Sign Up</h2>
<form method="POST"
action="signup. php">
<label
for="username">Username:
</ label>
<input
type="text" id="username"
name="username" required›
<label
for="password">Password:
</ label>
<input
type="password" id="password"
name="password" required›
‹label

type="password" sigudeprassword"
name="password" required>
<label
for="email">Email:</ label>
<input
type="emai]" id="email" name="email" required>
<button
type="submit">Register</butt on>
</ form>
</ div›
<script src="script.js">
</ script>
</body> </html >
