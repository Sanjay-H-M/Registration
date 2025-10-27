<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $phone   = htmlspecialchars($_POST["phone"]);
    $dob     = htmlspecialchars($_POST["dob"]);
    $gender  = htmlspecialchars($_POST["gender"]);
    $course  = htmlspecialchars($_POST["course"]);
    $address = htmlspecialchars($_POST["address"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .result-box {
      background: #fff;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 500px;
      text-align: left;
      animation: fadeIn 1s ease-in-out;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #222;
    }
    p {
      font-size: 16px;
      margin: 8px 0;
      color: #333;
    }
    .btn {
      display: block;
      margin-top: 25px;
      text-align: center;
      background: linear-gradient(135deg, #0072ff, #00c6ff);
      color: #fff;
      padding: 12px;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn:hover {
      background: linear-gradient(135deg, #005ce6, #00a3cc);
    }
  </style>
</head>
<body>
  <div class="result-box">
    <h2>✅ Application Submitted Successfully!</h2>
    <p><strong>Full Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Date of Birth:</strong> <?= $dob ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course / Program:</strong> <?= $course ?></p>
    <p><strong>Address:</strong> <?= $address ?></p>

    <a href="index.html" class="btn">⬅ Back to Form</a>
  </div>
</body>
</html>
