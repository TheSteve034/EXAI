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
<section id="form_container">
    <form method="post" action="DB.php" class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Explanation Survey</legend>
            <!-- Multiple Radios (inline) -->
            <hr>
            <h5>Trust</h5>
            <hr>
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">How did the recommendation you just saw affect your <b>trust</b>
                    in the recommendation software?</label>
                <div class="col">
                    significantly reduced &nbsp; &nbsp;<label class="radio-inline" for="radios-01">1 &nbsp; &nbsp; <br />
                       <input type="radio" name="question1" id="radios-01" <?php if(isset($question1) && $question1=="1") echo "checked";?> value="1" required>
                    </label>
                    <label class="radio-inline" for="radios-11">2 &nbsp; &nbsp; <br />
                        <input type="radio" name="question1" id="radios-11" <?php if(isset($question1) && $question1=="2") echo "checked";?> value="2">
                    </label>
                    <label class="radio-inline" for="radios-21">3 &nbsp; &nbsp; <br />
                        <input type="radio" name="question1" id="radios-21" <?php if(isset($question1) && $question1=="3") echo "checked";?> value="3">
                    </label>
                    <label class="radio-inline" for="radios-31">4 &nbsp; &nbsp; <br />
                        <input type="radio" name="question1" id="radios-31" <?php if(isset($question1) && $question1=="4") echo "checked";?> value="4">
                    </label>
                    <label class="radio-inline" for="radios-41">5 &nbsp; &nbsp; <br />
                        <input type="radio" name="question1" id="radios-41" <?php if(isset($question1) && $question1=="5") echo "checked";?> value="5">
                    </label>significantly increased
                </div>
            </div>
            <hr>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Based on <b>all</b> the recommendations you have seen
                    <b>up to this point</b>, how much do you <b>trust</b> the recommendation software currently?</label>
                <div class="col">
                    No Trust &nbsp; &nbsp;<label class="radio-inline" for="radios-03">1 &nbsp; &nbsp; <br />
                        <input type="radio" name="question3" id="radios-03" <?php if(isset($question3) && $question3=="1") echo "checked";?> value="1" required>
                    </label>
                    <label class="radio-inline" for="radios-13">2 &nbsp; &nbsp; <br />
                        <input type="radio" name="question3" id="radios-13" <?php if(isset($question3) && $question3=="2") echo "checked";?> value="2">
                    </label>
                    <label class="radio-inline" for="radios-23">3 &nbsp; &nbsp; <br />
                        <input type="radio" name="question3" id="radios-23" <?php if(isset($question3) && $question3=="3") echo "checked";?> value="3">
                    </label>
                    <label class="radio-inline" for="radios-33">4 &nbsp; &nbsp; <br />
                        <input type="radio" name="question3" id="radios-33" <?php if(isset($question3) && $question3=="4") echo "checked";?> value="4">
                    </label>
                    <label class="radio-inline" for="radios-43">5 &nbsp; &nbsp; <br />
                        <input type="radio" name="question3" id="radios-43" <?php if(isset($question3) && $question3=="5") echo "checked";?> value="5">
                    </label> Complete Trust
                </div>
            </div>
            <hr>
            <h5>Understanding</h5>
            <hr>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">How did the explanation of the recommendation affect
                    your <b>understanding</b> of the recommendation software?</label>
                <div class="col">
                    significantly reduced &nbsp; &nbsp;<label class="radio-inline" for="radios-02">1 &nbsp; &nbsp; <br />
                        <input type="radio" name="question2" id="radios-02" <?php if(isset($question2) && $question2=="1") echo "checked";?> value="1" required>
                    </label>
                    <label class="radio-inline" for="radios-12">2 &nbsp; &nbsp; <br />
                        <input type="radio" name="question2" id="radios-12" <?php if(isset($question2) && $question2=="2") echo "checked";?> value="2">
                    </label>
                    <label class="radio-inline" for="radios-22">3 &nbsp; &nbsp; <br />
                        <input type="radio" name="question2" id="radios-22" <?php if(isset($question2) && $question2=="3") echo "checked";?> value="3">
                    </label>
                    <label class="radio-inline" for="radios-32">4 &nbsp; &nbsp; <br />
                        <input type="radio" name="question2" id="radios-32" <?php if(isset($question2) && $question2=="4") echo "checked";?> value="4">
                    </label>
                    <label class="radio-inline" for="radios-42">5 &nbsp; &nbsp; <br />
                        <input type="radio" name="question2" id="radios-42" <?php if(isset($question2) && $question2=="5") echo "checked";?> value="5">
                    </label>significantly increased
                </div>
            </div>
            <hr>
            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Based on <b>all</b> the recommendations you have seen
                    <b>up to this point</b>, how much do you <b>understand</b> the recommendation software currently?</label>
                <div class="col">
                    No Understanding &nbsp; &nbsp;<label class="radio-inline" for="radios-04">1 &nbsp; &nbsp; <br />
                        <input type="radio" name="question4" id="radios-04" <?php if(isset($question4) && $question4=="1") echo "checked";?> value="1" required>
                    </label>
                    <label class="radio-inline" for="radios-14">2 &nbsp; &nbsp; <br />
                        <input type="radio" name="question4" id="radios-14" <?php if(isset($question4) && $question4=="2") echo "checked";?> value="2">
                    </label>
                    <label class="radio-inline" for="radios-24">3 &nbsp; &nbsp; <br />
                        <input type="radio" name="question4" id="radios-24" <?php if(isset($question4) && $question4=="3") echo "checked";?> value="3">
                    </label>
                    <label class="radio-inline" for="radios-34">4 &nbsp; &nbsp; <br />
                        <input type="radio" name="question4" id="radios-34" <?php if(isset($question4) && $question4=="4") echo "checked";?> value="4">
                    </label>
                    <label class="radio-inline" for="radios-44">5 &nbsp; &nbsp; <br />
                        <input type="radio" name="question4" id="radios-44" <?php if(isset($question4) && $question4=="5") echo "checked";?> value="5">
                    </label> Complete Understanding
                </div>
            </div>
        </fieldset>
        <hr>
        <h5>The following two questions ask you about which explanation method have affected your trust and understanding the most.</h5>
        <hr>
        <fieldset>
            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Which explanation increases your <b>trust</b> the most?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-06">
                            <input type="radio" name="question5" id="radios-06" <?php if(isset($question5) && $question5=="1") echo "checked";?> value="1" required>
                            Simple Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-16">
                            <input type="radio" name="question5" id="radios-16" <?php if(isset($question5) && $question5=="2") echo "checked";?> value="2">
                            Technical Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-26">
                            <input type="radio" name="question5" id="radios-26" <?php if(isset($question5) && $question5=="3") echo "checked";?> value="3">
                            Visual Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-36">
                            <input type="radio" name="question5" id="radios-36" <?php if(isset($question5) && $question5=="4") echo "checked";?> value="4">
                            None of Them
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">
                    Which explanation did you find the most useful when trying to <b>understand</b> the recommendation?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-07">
                            <input type="radio" name="question6" id="radios-07" <?php if(isset($question6) && $question6=="1") echo "checked";?> value="1" required>
                            Simple Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-17">
                            <input type="radio" name="question6" id="radios-17" <?php if(isset($question6) && $question6=="2") echo "checked";?> value="2">
                            Technical Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-27">
                            <input type="radio" name="question6" id="radios-27" <?php if(isset($question6) && $question6=="3") echo "checked";?> value="3">
                            Visual Explanation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-37">
                            <input type="radio" name="question6" id="radios-37" <?php if(isset($question6) && $question6=="4") echo "checked";?> value="4">
                            None of Them
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
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