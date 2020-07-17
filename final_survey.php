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
$q1Error = $q2Error = $q3Error ="";
$q1 = $q2 = $q3 ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["question1Text"])) {
        $q1Error = "response required";
    } else {
        $q1 = sanatize_in($_POST["question1Text"]);
    }

    if(empty($_POST["question2Text"])) {
        $q2Error = "response required";
    } else {
        $q2 = sanatize_in($_POST["question2Text"]);
    }

    if(empty($_POST["question3Text"])) {
        $q3Error = "response required";
    } else {
        $q3 = sanatize_in($_POST["question3Text"]);
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
                    <textarea class="form-control"  name="question1Text"><?php echo $q1;?></textarea>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Were any of the recommendations inconsistent with your expectations based on the user’s profile? If so, explain why.</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="question2Text"><?php echo $q2;?></textarea>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">In as much detail as possible, please explain how the recommendation software produces a recommendation</label>
                <div class="col-md-4">
                    <textarea class="form-control"  name="question3Text"><?php echo $q3;?></textarea>
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