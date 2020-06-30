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
    <form method="post" action="DB.php"  class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Explanation Survey</legend>
            <p><span class="error">* required field</span></p>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">On a scale of 1-5 where 1 is significantly reduced
                    your trust and 5 is significantly increased your trust. How did the recommendation affect your trust
                    in the recommendation software?</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="question1" id="radios-0" <?php if(isset($question1) && $question1=="1") echo "checked";?> value="1" required>
                        1
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="question1" id="radios-1" <?php if(isset($question1) && $question1=="2") echo "checked";?> value="2">
                        2
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="question1" id="radios-2" <?php if(isset($question1) && $question1=="3") echo "checked";?> value="3">
                        3
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="question1" id="radios-3" <?php if(isset($question1) && $question1=="4") echo "checked";?> value="4">
                        4
                    </label>
                    <label class="radio-inline" for="radios-4">
                        <input type="radio" name="question1" id="radios-4" <?php if(isset($question1) && $question1=="5") echo "checked";?> value="5">
                        5
                    </label>
                    <span class="error">* <?php echo $q1Err;?></span>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">On a scale of 1-5 where 1 is reduced your
                    understanding significantly and 5 is increased your understanding significantly. How did the
                    explanation of the recommendation affect your understanding of the recommendation software?</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="question2" id="radios-0" <?php if(isset($question2) && $question2=="1") echo "checked";?> value="1" required>
                        1
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="question2" id="radios-1" <?php if(isset($question2) && $question2=="2") echo "checked";?> value="2">
                        2
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="question2" id="radios-2" <?php if(isset($question2) && $question2=="3") echo "checked";?> value="3">
                        3
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="question2" id="radios-3" <?php if(isset($question2) && $question2=="4") echo "checked";?> value="4">
                        4
                    </label>
                    <label class="radio-inline" for="radios-4">
                        <input type="radio" name="question2" id="radios-4" <?php if(isset($question2) && $question2=="5") echo "checked";?> value="5">
                        5
                    </label>
                    <span class="error">* <?php echo $q2Err;?></span>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">On a scale of 1-10 where 1 indicates no trust and 10
                    indicates complete trust, in general, how much do you currently trust the recommendation software?</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="question3" id="radios-0" <?php if(isset($question3) && $question3=="1") echo "checked";?> value="1" required>
                        1
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="question3" id="radios-1" <?php if(isset($question3) && $question3=="2") echo "checked";?> value="2">
                        2
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="question3" id="radios-2" <?php if(isset($question3) && $question3=="3") echo "checked";?> value="3">
                        3
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="question3" id="radios-3" <?php if(isset($question3) && $question3=="4") echo "checked";?> value="4">
                        4
                    </label>
                    <label class="radio-inline" for="radios-4">
                        <input type="radio" name="question3" id="radios-4" <?php if(isset($question3) && $question3=="5") echo "checked";?> value="5">
                        5
                    </label>
                    <label class="radio-inline" for="radios-5">
                        <input type="radio" name="question3" id="radios-5" <?php if(isset($question3) && $question3=="6") echo "checked";?> value="6">
                        6
                    </label>
                    <label class="radio-inline" for="radios-6">
                        <input type="radio" name="question3" id="radios-6" <?php if(isset($question3) && $question3=="7") echo "checked";?> value="7">
                        7
                    </label>
                    <label class="radio-inline" for="radios-7">
                        <input type="radio" name="question3" id="radios-7" <?php if(isset($question3) && $question3=="8") echo "checked";?> value="8">
                        8
                    </label>
                    <label class="radio-inline" for="radios-8">
                        <input type="radio" name="question3" id="radios-8" <?php if(isset($question3) && $question3=="9") echo "checked";?> value="9">
                        9
                    </label>
                    <label class="radio-inline" for="radios-9">
                        <input type="radio" name="question3" id="radios-9" <?php if(isset($question3) && $question3=="10") echo "checked";?> value="10">
                        10
                    </label>
                    <span class="error">* <?php echo $q3Err;?></span>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">On a scale of 1-10 where 1 indicates no trust and 10
                    indicates complete trust, in general, how much do you currently trust the recommendation software?</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="question4" id="radios-0" <?php if(isset($question4) && $question4=="1") echo "checked";?> value="1" required>
                        1
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="question4" id="radios-1" <?php if(isset($question4) && $question4=="2") echo "checked";?> value="2">
                        2
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="question4" id="radios-2" <?php if(isset($question4) && $question4=="3") echo "checked";?> value="3">
                        3
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="question4" id="radios-3" <?php if(isset($question4) && $question4=="4") echo "checked";?> value="4">
                        4
                    </label>
                    <label class="radio-inline" for="radios-4">
                        <input type="radio" name="question4" id="radios-4" <?php if(isset($question4) && $question4=="5") echo "checked";?> value="5">
                        5
                    </label>
                    <label class="radio-inline" for="radios-5">
                        <input type="radio" name="question4" id="radios-5" <?php if(isset($question4) && $question4=="6") echo "checked";?> value="6">
                        6
                    </label>
                    <label class="radio-inline" for="radios-6">
                        <input type="radio" name="question4" id="radios-6" <?php if(isset($question4) && $question4=="7") echo "checked";?> value="7">
                        7
                    </label>
                    <label class="radio-inline" for="radios-7">
                        <input type="radio" name="question4" id="radios-7" <?php if(isset($question4) && $question4=="8") echo "checked";?> value="8">
                        8
                    </label>
                    <label class="radio-inline" for="radios-8">
                        <input type="radio" name="question4" id="radios-8" <?php if(isset($question4) && $question4=="9") echo "checked";?> value="9">
                        9
                    </label>
                    <label class="radio-inline" for="radios-9">
                        <input type="radio" name="question4" id="radios-9" <?php if(isset($question4) && $question4=="10") echo "checked";?> value="10">
                        10
                    </label>
                    <span class="error">* <?php echo $q4Err;?></span>
                </div>
            </div>

        </fieldset>
        <fieldset>
            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Which explanation increases your trust the most?</label>
                <span class="error">* <?php echo $q5Err;?></span>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input type="radio" name="question5" id="radios-0" <?php if(isset($question5) && $question5=="1") echo "checked";?> value="1" required>
                            Simple Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input type="radio" name="question5" id="radios-1" <?php if(isset($question5) && $question5=="2") echo "checked";?> value="2">
                            Technical Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-2">
                            <input type="radio" name="question5" id="radios-2" <?php if(isset($question5) && $question5=="3") echo "checked";?> value="3">
                            Visual Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-3">
                            <input type="radio" name="question5" id="radios-3" <?php if(isset($question5) && $question5=="4") echo "checked";?> value="4">
                            None of Them
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">
                    Which explanation did you find the most useful when trying to understand the recommendation?</label>
                <span class="error">* <?php echo $q6Err;?></span>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input type="radio" name="question6" id="radios-0" <?php if(isset($question6) && $question6=="1") echo "checked";?> value="1" required>
                            Simple Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input type="radio" name="question6" id="radios-1" <?php if(isset($question6) && $question6=="2") echo "checked";?> value="2">
                            Technical Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-2">
                            <input type="radio" name="question6" id="radios-2" <?php if(isset($question6) && $question6=="3") echo "checked";?> value="3">
                            Visual Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-3">
                            <input type="radio" name="question6" id="radios-3" <?php if(isset($question6) && $question6=="4") echo "checked";?> value="4">
                            None of Them
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Submit Survey</label>
                <div class="col-md-4">
                    <input id ="tutorial_submit_btn" type="submit" name="submit" value="submit">
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