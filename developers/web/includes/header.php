<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="author"      content="Ignasi Ortiz, Carlos Leichner, Gabriel Farrus" />
	<meta name="description" content="IT Academy - FullStack LAMP" />
    <title>PhP Developers</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <!-- cdn per incorporar Tailwind al projecte  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap 4 --> 
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
    <!-- font awesome 5  -->
    <script src="https://kit.fontawesome.com/afe5486742.js" crossorigin="anonymous"></script>    
</head>
<body class="bg-blue-200">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="d-inline">
                <img src="./images/tasks_96x96.png"/>
                <a href="index.php" class="navbar-brand">PHP Developers Team - CRUD with json, mySql, mongo.</a>
            </div>
        </div>
    </nav>
    <br>
    <br>

    <h3>BD - JSON: users.json</h3>
    <?php include("../db/users.json"); ?>
    <br><br>

    <h3>BD - JSON: tasks.json</h3>
    <?php include("../db/tasks.json"); ?>
    <br><br>

    <h3>BD - JSON: status.json</h3>
    <?php include("../db/status.json"); ?>
    <br><br>
