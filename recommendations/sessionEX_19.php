<?php
session_start();
$_SESSION["rcount"] = "19";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_20.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/recipeEX.css">
    <title>Recommendation 19</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <div class="card" style="width: auto;">
            <img src="../Images/food_images/r19foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chef John's Peanut Butter Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">These classic cookies don't get much easier.
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>251.6 Calories</li>
                    <li>35.8 mg cholesterol</li>
                    <li>228.7 mg sodium</li>
                    <li>29.5 g carbohydrates</li>
                    <li>4.7 g protein</li>
                </ul>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Ingredients
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="tutorial_recipe_ingredients">
                            <header id="tutorial_recipe_iTitle">Ingredients:</header>
                            <ul id="tutorial_recipe_iList">
                                <li>½ cup unsalted butter</li>
                                <li>½ cup white sugar</li>
                                <li>½ cup packed brown sugar</li>
                                <li>½ cup creamy peanut butter</li>
                                <li>½ teaspoon kosher salt</li>
                                <li>½ teaspoon baking powder</li>
                                <li>½ teaspoon baking soda</li>
                                <li>1 egg</li>
                                <li>1 ¼ cups all-purpose flour</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Directions
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="tutorial_recipe_directions">
                            <header id="tutorial_recipe_iTitle">Directions</header>
                            <ul id="tutorial_recipe_iList">
                                <li>
                                    1. Beat butter, white sugar, brown sugar, peanut butter, salt, baking powder, and
                                    baking soda in a stand mixer until smooth.
                                </li>
                                <li>
                                    2. Scrape down the sides of the bowl and beater with a spatula. Add egg and mix for
                                    about 1 minute.
                                </li>
                                <li>
                                    3. Slowly mix in flour with the mixer on low. Scrape down the sides of the bowl and
                                    beater. Mix on medium until combined, about 30 seconds.
                                </li>
                                <li>4. Form dough into a ball, cover with plastic and refrigerate for 2-3 hours.
                                </li>
                                <li>5. Preheat the oven to 375 degrees F (190 degrees C).
                                </li>
                                <li>6. Portion out cookie dough in equal-sized balls on a baking sheet covered with a
                                    silicone baking mat. Use damp hands to roll dough into smooth balls. Stamp each ball
                                    with a fork in a criss-cross pattern.
                                </li>
                                <li>
                                    7. Bake in the preheated oven for 10 minutes until golden.
                                </li>
                                <li>
                                    8. Leave on the baking sheet for 5 minutes before transferring to a cooling rack.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="tutorial_recipe_explanations" >
        <section id="button_groups">
            <div class="btn-group-vertical">
                    <span class="border">
                        <button onclick="toggleSimpleEX()" id="EX_button" type="button" class="btn btn-primary">Simple Explanation</button>
                    </span>
                &nbsp;
                <span class="border">
                        <button onclick="toggleTechnicalEX()" id="EX_button" type="button" class="btn btn-primary">Technical Explanation</button>
                    </span>
                &nbsp;
                <span class="border">
                        <button onclick="toggleVisualEX()" id="EX_button" type="button" class="btn btn-primary">Visual Explanation</button>
                    </span>
                <br>
                <span class="border">
                    <a href="../user_profile.php" target="_top" style="margin-top: 10px">
                        <button type="button" class="btn btn-primary">View User Profile</button>
                    </a>
                </span>
                <br>
                <span class="border">
                    <!--<a href="../session_survey.php" target="_top" style="margin-top: 10px">-->
                        <button onclick="submitClicks()" type="button" class="btn btn-primary">Continue</button>
                    <!--</a>-->
                </span>
            </div>
        </section>
        <section id="explanations" style="padding: 5px">
            <div id="simple_EX" class="card">
                <div class="card-body">
                    <p>
                        This recipe is recommended to you because it is a peanut butter cookie recipe from a highly rated
                        All Recipes.com chef.
                    </p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.9. The most common
                        positive feature of this recipe was how easy to was to make well combined with the good flavour.
                        This feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r19Cropped.jpg" alt="image missing">
                <div class="card-body">
                </div>
            </div>
        </section>
    </section>
</section>
<!-- Optional JavaScript -->
<script src="../scripts/showEx.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>