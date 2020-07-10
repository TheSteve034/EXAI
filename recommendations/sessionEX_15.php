<?php
session_start();
$_SESSION["rcount"] = "15";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_16.php";
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
    <title>Recommendation 15</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <div class="card" style="width: auto;">
            <img src="../Images/food_images/r15foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cyclops Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">Yummy peanut butter cookies with "cyclops' eye" of chocolate.
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>195.7 Calories</li>
                    <li>20.1 mg cholesterol</li>
                    <li>115.7 mg sodium</li>
                    <li>25.2 g carbohydrates</li>
                    <li>3.3 g protein</li>
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
                                <li>½ cup butter</li>
                                <li>½ cup peanut butter</li>
                                <li>½ cup white sugar</li>
                                <li>½ cup packed brown sugar</li>
                                <li>1 egg</li>
                                <li>2 tablespoons milk</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>1 ¾ cups all-purpose flour</li>
                                <li>1 teaspoon baking powder</li>
                                <li>¼ teaspoon salt</li>
                                <li>⅛ teaspoon baking soda</li>
                                <li>⅓ cup granulated sugar for decoration</li>
                                <li>48 milk chocolate candy kisses, unwrapped</li>
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
                                    1. In a large mixer bowl beat the butter or margarine and peanut butter with an
                                    electric mixer on medium speed for about 30 seconds. Add 1/2 cup of the white sugar
                                    and the brown sugar and beat until fluffy. Add the egg, milk and vanilla and beat well.
                                </li>
                                <li>
                                    2. In a medium mixing bowl stir together the flour baking powder, salt and baking
                                    soda. With the mixer on low speed gradually add the flour mixture to the peanut
                                    butter mixture. Beat until well combined. Cover and chill dough for 1 hour.
                                </li>
                                <li>
                                    3. Preheat oven to 375 degrees F (205 degrees C).
                                </li>
                                <li>
                                    4. Shape dough into 1 inch balls. Roll balls in additional sugar. Place about 2
                                    inches apart on ungreased cookie sheets.
                                </li>
                                <li>
                                    5. Bake at 375 degrees F (205 degrees C) for 10 to 12 minutes or until the edges are
                                    firm. Immediately press a chocolate kiss atop each cookie. Transfer cookies to a
                                    cooling rack and let cool.
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
                    <a href="../session_survey.php" target="_top" style="margin-top: 10px">
                        <button type="button" class="btn btn-primary">Continue</button>
                    </a>
                </span>
            </div>
        </section>
        <section id="explanations" style="padding: 5px">
            <div id="simple_EX" class="card">
                <div class="card-body">
                    <p>
                        This recipe is recommended to you because it is a highly rated chocolate chip cookie that also
                        uses peanut butter. This matches two fo your favorite ingredients.
                    </p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.9. The most common
                        positive feature of this recipe was the large chocolate chip used in the center.
                        This feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r15Cropped.jpg" alt="image missing">
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