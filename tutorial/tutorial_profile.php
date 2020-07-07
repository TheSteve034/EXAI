<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- custom CSS -->
    <link rel="stylesheet" href="../css/userProfile.css">
    <title>Steve's Profile</title>
</head>
<body class="p-3 mb-2 bg-light text-black" >
<h1>Steve's User Profile</h1>
<section id="general_Info_container">
    <div id="general_Info">
        <div>
            <h2>General Information</h2>
            <p>Steve is a regular user of this recommendation system. He loves cookies and use this recommendation system to look for his next favorite cookie recipe.</p>
            <p>Bellow is a list of Steve's favorite type of cookies.</p>
        </div>
    </div>
    <div id="favorite_ingredients">
        <div>
            <h2>Favorite Ingredients</h2>
            <p>When Steve is looking for new cookies to try he has a list of some ingredients that he likes to see in new recipes.</p>
            <p>Bellow is a list of these</p>
        </div>
    </div>
    <div id="top_recipes">
        <div>
            <h2>Top Cookie Recipes</h2>
            <p>Bellow is a list of Steve's top rated cookie recipes.</p>
        </div>
    </div>
</section>
<section id="general_info_list_container">
    <div>
        <ul id="user_profile_list" class="list-group">
            <li class="list-group-item list-group-item-info">Chocolate Chip Cookies</li>
            <li class="list-group-item list-group-item-info">peanut butter cookies</li>
            <li class="list-group-item list-group-item-info">Oatmeal Cookies</li>
            <li class="list-group-item list-group-item-info">Sugar Cookies</li>
        </ul>
    </div>
    <div>
        <ul id="user_profile_list" class="list-group">
            <li class="list-group-item list-group-item-info">Chocolate</li>
            <li class="list-group-item list-group-item-info">Vanilla</li>
            <li class="list-group-item list-group-item-info">Cane Sugar</li>
            <li class="list-group-item list-group-item-info">Peanut Butter</li>
        </ul>
    </div>
    <div>
        <ul id="user_profile_list" class="list-group">
            <li class="list-group-item list-group-item-info">Outrageous Chocolate Chip Cookies</li>
            <li class="list-group-item list-group-item-info">Double Peanut Butter Cookies</li>
            <li class="list-group-item list-group-item-info">Old Fashioned Oatmeal Cookies</li>
        </ul>
    </div>
</section>

<section id ="user_instructions">
    <p>
        <b>Dont worry about memorizing this information, you will be able to return to the profile at any time during your session.
            Click continue to move to the next set of instructions.</b>
    </p>
    <a href="tutorital_recipe.php" target="_top" ><button type="button" class="btn btn-primary">Continue</button></a>
</section>
<?php
    echo session_id();
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
