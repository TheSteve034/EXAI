<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>End of Tutorial</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<div id="explanation_text">
    <p>
       You are now ready to complete your session. Remember that if at any time you have questions please call Samuel
        Reeder at the following number<br>801-390-1898
    </p>
    <p>Please answer the question bellow to get started.</p>
</div>
<form method="post" action="../scripts/submitUser.php" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Participant Information</legend>
        <p>For this session, please indicate if you fall into the technical or non-technical group.</p>
        <p>You are in the technical group if you meet at least one of the following criteria:</p>
        <ul>
            <li>You hold a Degree in a STEM (Science, Technology, Engineering, or Math) field.</li>
            <li>You are enrolled in a computer science program at the university level.</li>
            <li>You are employed in a STEM position</li>
        </ul>
        <p>If any of these apply to you, please select the technical option bellow, and hit continue. If not, select the non-technical option.</p>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios"></label>
            <div class="col-md-4">
                <div class="radio">
                    <label for="radios-0">
                        <input type="radio" name="userType" id="radios-0" <?php if(isset($userType) && $userType=="1") echo "checked";?> value="1" required>
                        Technical
                    </label>
                </div>
                <div class="radio">
                    <label for="radios-1">
                        <input type="radio" name="userType" id="radios-1" <?php if(isset($userType) && $userType=="2") echo "checked";?>value="2" required>
                        Non-Technical
                    </label>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <input id ="user_submit_button" type="submit" name="submit" value="continue">
            </div>
        </div>

    </fieldset>
</form>

<!--<a href="../recommendations/sessionEX_1.php" target="_top" style="margin-top: 10px">
    <button type="button" class="btn btn-primary">Continue</button>
</a>-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>