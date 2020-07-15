<?php
session_start();
$_SESSION["NextR"] = "Location: final_page.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/survey.css">
    <title>Survey Explanation</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<!-- PHP script for handling the form -->
<?php
$q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = "";
$question1 = $question2 = $question3 = $question4 = $question5 = $question5 ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["question1"])) {
        $q1Err = "response required";
    } else {
        $question1 = sanatize_in($_POST["question1"]);
    }

    if(empty($_POST["question2"])) {
        $q2Err = "response required";
    } else {
        $question2 = sanatize_in($_POST["question2"]);
    }

    if(empty($_POST["question3"])) {
        $q3Err = "response required";
    } else {
        $question3 = sanatize_in($_POST["question3"]);
    }

    if(empty($_POST["question4"])) {
        $q4Err = "response required";
    } else {
        $question4 = sanatize_in($_POST["question4"]);
    }

    if(empty($_POST["question5"])) {
        $q5Err = "response required";
    } else {
        $question5 = sanatize_in($_POST["question5"]);
    }

    if(empty($_POST["question6"])) {
        $q6Err = "response required";
    } else {
        $question6 = sanatize_in($_POST["question6"]);
    }
}

function sanatize_in($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h1>Session Survey</h1>
<section id="form_container">
    <form method="post" action="finalSurveySubmit.php" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Form Name</legend>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Briefly explain which method was the best at increasing your trust in the recommendation software and why</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="textarea"></textarea>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Were any of the recommendations inconsistent with your expectations based on the user’s profile? If so, explain why.</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="textarea"></textarea>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">In as much detail as possible, please explain how the recommendation software produces a recommendation</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="textarea"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
</section>

<!-- Optional JavaScript -->
<script src="scripts/formValidation.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>