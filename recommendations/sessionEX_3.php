<?php
session_start();
$_SESSION["rcount"] = "3";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_4.php";
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
    <title>Recommendation 3</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <div class="card" style="width: auto;">
            <img src="../Images/food_images/r3foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chocolate Mint Candies Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">I received this recipe through a cookie exchange years ago, and it has become a
                    favorite of family and friends.</p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>161.6 Calories</li>
                    <li>18.5 mg cholesterol</li>
                    <li>99.1 mg sodium</li>
                    <li>23.8 g carbohydrates</li>
                    <li>1.7 g protein</li>
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
                                <li>¾ cup butter</li>
                                <li>1 ½ cups brown sugar</li>
                                <li>2 tablespoons water</li>
                                <li>2 cups semisweet chocolate chips</li>
                                <li>2 eggs</li>
                                <li>2 ½ cups all-purpose flour</li>
                                <li>1 ¼ teaspoons baking soda</li>
                                <li>½ teaspoon salt</li>
                                <li>3 (4.5 ounce) packages chocolate covered thin mints</li>
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
                                <li>1. In a saucepan over medium heat, cook the sugar, butter and water, stirring
                                    occasionally until melted. Remove from heat, stir in the chocolate chips until
                                    melted and set aside to cool for 10 minutes.
                                </li>
                                <li>2. Pour the chocolate mixture into a large bowl, and beat in the eggs, one at a time.
                                    Combine the flour, baking soda and salt, stir into the chocolate mixture. Cover and
                                    refrigerate dough for at least 1 hour.
                                </li>
                                <li>3. Preheat oven to 350 degrees F (175 degrees C). Grease cookie sheets. Roll cookie
                                    dough into walnut sized balls and place 2 inches apart onto the prepared cookie sheets.
                                </li>
                                <li>4. Bake for 8 to 10 minutes in the preheated oven, be careful not to overbake. When
                                    cookies come out of the oven, Press one mint wafer into the top of each cookie and
                                    let sit for 1 minute. When the mint is softened, swirl with the back of a spoon or
                                    toothpick to make a pattern with the green filling of the mint wafer. For smaller
                                    cookies, break mints in half.
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
                    <p>This recipe is recommended to you because it is a highly rated recipe for cookies that includes
                        chocolate.</p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.5. The most common
                        positive feature of this recipe was the inclusion of mints with the chocolate flavour. This
                        feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r3Cropped.jpg" alt="image missing">
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