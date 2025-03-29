<?php
include ('config.php');
if ($
SERVER I 'REQUEST METHOD' ]
= 'POST') {
§username =
'_POSTl'username'];
§password =
$
POST [ 'password'];
// Validate input
if (empty ($username) |1
empty (Spassword)) f
echo "All fields are
required.";
exit;
｝
// Check credentials in
the database
§stmt = §conn-
prepare ("SELECT * FROM

users WHERE username = ?") ;
§stmt->bind_param("s",
Susername) ;
§stmt-›execute () ;
Sresult = $stmt-
›get result () ;

1£（Sresult->num_rOws >
0) 1
Suser = Sresult-
› fetch
assoc () ;
if
(password_verify (Spassword,
$user ['password'])) {
session start ();
§_SESSIONI 'user _id'] =
Suserl'id'];
echo "Login
successful! Welcome, " . htmlspecialchars (§username)
• ".";
} else {
echo "Invalid
password.";
} else {
echo "No user found
with that username.";
§stmt->close () ;
}
§conn->close () ;
?>
［

<! DOCTYPE html>
<html lang="en" >
<head>
‹meta charset="UTF-8" >
‹meta name="viewport"
content="width=device-width, initial-scale=1.0">
‹title>Login</title>
<link rel="stylesheet"
href="style.css">
</head>
<body>
<div class="container">
<h2 >Login</h2>
<form method=" POST"
action="login.php">
<label
for="username">Username:
</ label>
<input
type="text" id="username"
name="username" required>
<label
for="password">Password:
</ label>
<input

type="password" id="password"
name="password" required>

type="password" id="password"
name="password" required›
<button
type="submit">Login</button>
</ form>
</ div›
<script src="script.js">
</ script>
</body> </html>
