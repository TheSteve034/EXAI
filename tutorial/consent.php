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
    <link rel="stylesheet" href="../css/mainPage.css">
    <title>Participant Consent</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<h1>Participant Consent</h1>
<div id="consent_form" class="container-fluid">
    <h5>IRB STUDY #XXXXXXXXXX</h5>
    <h5>WEBER STATE UNIVERSITY</h5>
    <h5>INFORMED CONSENT</h5>

    <h6>Effects of explanations of recommendation engines</h6>


    <p>You are invited to participate in a research study of the effects of explanations on recipe recommendations.
        You were selected as a possible subject because you accepted an invitation via social media or other
        communication methods.  We ask that you read this form and ask any questions you may have before agreeing to be in the study.
    </p>

    </p>
        The study is being conducted by Samuel Reeder in connection with the Computer Science department of Weber State University.
    </p>

    <h6>STUDY PURPOSE</h6>

    <p>The purpose of this study is to gain insight into how explanation for why products are recommended to people can
        affect people trust and understand of how these systems work.
    </p>

    <h6>NUMBER OF PEOPLE TAKING PART IN THE STUDY:</h6>

    <p>If you agree to participate, you will be one of 50 subjects who will be participating in this research.</p>


    <h6>PROCEDURES FOR THE STUDY:</h6>

    <p>If you agree to be in the study, you will do the following things:</p>

    <ol>
        <li>View 25 recipe recommendations as well as the explanations associated with them.</li>
        <li>Provide feed back to a survey after viewing each recipe recommendation.</li>
        <li>View a provided user profile and use it as the basis for your feedback of the recommendations.</li>
    </ol>
    <h6>RISKS OF TAKING PART IN THE STUDY:</h6>

    <p>There are no risks to you in participating in this study other than those that are common to general computer use.
        Some of these risks are listed below.</p>
        <ul>
            <li>Eye Strain</li>
            <li>Headaches</li>
            <li>Musculoskeletal strain</li>
        </ul>

    <h6>BENEFITS OF TAKING PART IN THE STUDY</h6>

    <p>You will receive payment for taking part in this study. Upon completion of the study you will need to digitally
        sign a document indicating that you will receive payment. To receive payment, you must provide the research team
        with a valid mailing address. You will then receive a $10.00 Amazon gift card.
    </p>

    <h6>ALTERNATIVES TO TAKING PART IN THE STUDY:</h6>

    <p>Instead of being in the study, you have these options:</p>
    <ol>
        <li>you may choose not to participate.</li>
    </ol>

    <h6>COSTS/ COMPENSATION FOR INJURY</h6>
    <p>In the event of physical injury resulting from your participation in this research, necessary medical treatment
        will be provided to you and billed as part of your medical expenses.  Costs not covered by your health care
        insurer will be your responsibility.  Also, it is your responsibility to determine the extent of your health
        care coverage.  There is no program in place for other monetary compensation for such injuries.  However, you
        are not giving up any legal rights or benefits to which you are otherwise entitled.  If you are participating in
        research which is not conducted at a medical facility, you will be responsible for seeking medical care and for
        the expenses associated with any care received.
    </p>


    <h6>CONFIDENTIALITY</h6>

    <p>Efforts will be made to keep your personal information confidential.  We cannot guarantee absolute confidentiality.
    Your personal information may be disclosed if required by law.  Your identity will be held in confidence in reports
        in which the study may be published, and databases in which results may be stored.</p>

    <p>Organizations that may inspect and/or copy your research records for quality assurance and data analysis include
    groups such as the study investigator and his/her research associates, the Weber State University Institutional
    Review Board or its designees, and (as allowed by law) state or federal agencies, specifically the Office for Human
    Research Protections (OHRP) and the Food and Drug Administration (FDA) [for FDA-regulated research and research
    involving positron-emission scanning], the National Cancer Institute (NCI) [for research funded or supported by NCI],
    the National Institutes of Health (NIH) [for research funded or supported by NIH], etc., who may need to access your
        medical and/or research records.</p>


    <h6>CONTACTS FOR QUESTIONS OR PROBLEMS</h6>

    <p>For questions about the study, contact the researcher Samuel Reeder at 801-390-1898 or the researcher’s mentor
        Robert Ball at 801-626-7942.
    </p>

    <p>For questions about your rights as a research participant or to discuss problems, complaints or concerns about a
        research study, or to obtain information, or offer input, contact the Chair of the IRB Committee IRB@weber.edu.
    </p>

    <h6>VOLUNTARY NATURE OF STUDY</h6>

    <p>Taking part in this study is voluntary.  You may choose not to take part or may leave the study at any time.  Leaving
    the study will not result in any penalty or loss of benefits to which you are entitled.  Your decision whether or not
        to participate in this study will not affect your current or future relations with Weber State University.</p>

    <p>You may choose to stop participating in the experiment at any point during your session. However, you must
        complete the experiment to receive the compensation outlined above.
    </p>

    <h6>SUBJECT’S CONSENT</h6>

    <p>Having read all the above, if you, of your own free will and choice, desire to participate in the experiment
        titled above, click the continue button bellow.</p>

    <p><b>PLEASE NOTE: by clicking the continue button you give your consent and accept all the terms as they are stated above.</b></p>


</div>

<a href="last_tutorial.php" target="_top" >
    <button type="button" class="btn btn-primary">Continue</button>
</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
