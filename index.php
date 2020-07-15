<?php
    session_start();
//unset($_SESSION);
//if (ini_get("session.use_cookies")) {
   // $params = session_get_cookie_params();
   // setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"],$params["httponly"]);
//}

//session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/mainPage.css">
    <title> Introduction and Instruction</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<h1> Introduction and Instruction</h1>
<div id="intro_text" class="container-fluid">
    <p>Welcome to this recommendation engine validation session. Thank you for your participation.
        The purpose of this session to is for you to help validate the effectiveness of recommendations based on
        explanations that the software provides.
    </p>
    <p>The system you are validating is a collaborative based recommendation engine that uses feature focused
        opinion mining to produce explanations for the recommendations.
        The software has been trained using a large data set of recipes gathered from the internet.
    </p>
    <p>On the next page you will see a profile for one of the users of this system.
        During this session you should imagine that you are this user and use the information provided on the
        profile page to help you judge the recommendations you see.
    </p>
    <p>Your as you view each recommendation and it’s set of explanations you will be asked a series of survey
        questions that are designed to help gauge how your trust and understanding of the recommendation system
        is affected by each new recommendation.
    </p>
    <p>
        If at any point during this session you are confused or have questions, please reach out to Samuel Reeder at the following phone number 801-390-1898.
        <br>Press continue to see the users profile.
    </p>
</div>

<a href="tutorial/tutorial_profile.php" target="_top" >
    <button type="button" class="btn btn-primary">Continue</button>
</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
