<?php
session_start();
$_SESSION["rcount"] = "8";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_9.php";
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
    <title>Recommendation 8</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <div class="card" style="width: auto;">
            <img src="../Images/food_images/r8foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Half and Halfs</h5>
                <h6>Description</h6>
                <p class="card-text">I came up with this recipe when I couldn't decide whether I wanted chocolate chip
                    or double chip cookies so I came up with a way to have both! These cookies are half plain chocolate
                    chip and half chocolate chocolate chip.
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>178.6 Calories</li>
                    <li>26.8 mg cholesterol</li>
                    <li>66.9 mg sodium</li>
                    <li>24 g carbohydrates</li>
                    <li>2.3 g protein</li>
                </ul>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button onclick="iClick()" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Ingredients
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="tutorial_recipe_ingredients">
                            <header id="tutorial_recipe_iTitle">Ingredients:</header>
                            <ul id="tutorial_recipe_iList">
                                <li>1 ½ cups all-purpose flour</li>
                                <li>¼ teaspoon baking soda</li>
                                <li>1 pinch salt</li>
                                <li>½ cup butter, softened</li>
                                <li>¼ cup white sugar</li>
                                <li>½ cup brown sugar</li>
                                <li>1 egg</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>1 cup milk chocolate chips</li>
                                <li>1 ½ cups all-purpose flour</li>
                                <li>¼ teaspoon baking soda</li>
                                <li>salt</li>
                                <li>¼ cup unsweetened cocoa powder</li>
                                <li>½ cup butter, softened</li>
                                <li>½ cup brown sugar</li>
                                <li>½ cup white sugar</li>
                                <li>1 egg</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>1 cup milk chocolate chips</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button onclick="dClick()" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Directions
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div id="tutorial_recipe_directions">
                            <header id="tutorial_recipe_iTitle">Directions</header>
                            <ul id="tutorial_recipe_iList">
                                <li>1. Preheat the oven to 300 degrees F (150 degrees C).
                                </li>
                                <li>
                                    2. In a medium bowl, cream together 1/2 cup butter with 1/4 cup white sugar and 1/2
                                    cup brown sugar. Beat in 1 egg and 1 teaspoon vanilla. Combine 1 1/2 cups flour with
                                    1/4 teaspoon of baking soda and a pinch of salt, stir into the creamed mixture until
                                    well blended. Fold in the chocolate chips.
                                </li>
                                <li>
                                    3. In another medium bowl, cream together 1/2 cup butter with 1/2 cup white sugar
                                    and 1/2 cup brown sugar. Beat in 1 egg and 1 teaspoon vanilla. Combine 1 1/2 cups
                                    flour with 1/4 cup cocoa, 1/4 teaspoon of baking soda and a pinch of salt, stir into
                                    the creamed mixture until well blended. Fold in the chocolate chips. Scoop a small
                                    amount of each dough onto a large spoon, drop cookies 2 inches apart onto an
                                    unprepared cookie sheet.
                                </li>
                                <li>4. Bake for 8 to 10 minutes in the preheated oven. Allow cookies to cool on baking
                                    sheet for 5 minutes before removing to a wire rack to cool completely.
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
                    <p>This recipe is recommended to you because it is a highly rated pizza dough recipe.</p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.6. The most common
                        positive feature of this recipe was the consistent results when making the recipe multiple times.
                        This feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r8Cropped.jpg" alt="image missing">
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