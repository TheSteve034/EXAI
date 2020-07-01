<?php
session_start();
$_SESSION["rcount"] = "2";
$_SESSION["NextR"] = "Location: sessionEX_3.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recipeEX.css">
    <title>Recommendation 2</title>
</head>
<body class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <div class="card" style="width: auto;">
            <img src="Images/food_images/r2foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Photos of Oatmeal Peanut Butter Cookies III</h5>
                <h6>Description</h6>
                <p class="card-text">These are so close to the Girl Scout oatmeal peanut butter cookies that you won't
                    know the difference!</p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>397 Calories</li>
                    <li>23.5 g total fat</li>
                    <li>48 mg cholesterol</li>
                    <li>343 mg sodium</li>
                    <li>42.2 g carbohydrates</li>
                    <li>7.8 g protein</li>
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
                                <li>¾ cup all-purpose flour</li>
                                <li>½ teaspoon baking soda</li>
                                <li>2¼ teaspoon baking powder</li>
                                <li>½ teaspoon salt</li>
                                <li>½ cup butter, softened</li>
                                <li>½ cup peanut butter</li>
                                <li>½ cup white sugar</li>
                                <li>½ cup packed light brown sugar</li>
                                <li>1 egg</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>1 cup quick cooking oats</li>
                                <li>3 tablespoons butter, softened</li>
                                <li>1 cup confectioners' sugar</li>
                                <li>½ cup smooth peanut butter</li>
                                <li>2 ½ tablespoons heavy whipping cream</li>
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
                                <li>1. In a large bowl, cream together 1/2 cup butter or margarine, 1/2 cup peanut
                                    butter, white sugar, brown sugar, and vanilla. Add egg and beat well.</li>
                                <li>2. In another bowl, combine the flour, baking soda, baking powder, and salt.
                                    Add these dry ingredients to the creamed mixture. Stir. Add oatmeal and stir.</li>
                                <li>3. Drop by teaspoons onto greased baking sheet, and press each mound down with a
                                    fork to form 1/4 inch thick cookies. Bake at 350 degrees F (175 degrees C) for 10
                                    minutes, or until cookies are a light brown.
                                </li>
                                <li>4. To Make Filling: Cream 3 tablespoons butter or margarine with the confectioners'
                                    sugar, 1/2 cup smooth peanut butter, and the cream. Spread filling onto half of the
                                    cooled cookies, then top with the other half to form sandwiches.
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
                    <a href="user_profile.php" target="_top" style="margin-top: 10px">
                        <button type="button" class="btn btn-primary">View User Profile</button>
                    </a>
                </span>
                <br>
                <span class="border">
                    <a href="session_survey.php" target="_top" style="margin-top: 10px">
                        <button type="button" class="btn btn-primary">Continue</button>
                    </a>
                </span>
            </div>
        </section>
        <section id="explanations" style="padding: 5px">
            <div id="simple_EX" class="card">
                <div class="card-body">
                    <p>This recipe is recommended to you because it contains peanut butter, which is one of your favorite
                        ingredients.</p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.9. The most common
                        positive feature of this recipe is that the cookies we soft with a rich taste. These features
                        were extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="Images/wordclouds/r2Cropped.jpg" alt="image missing">
                <div class="card-body">
                </div>
            </div>
        </section>
    </section>
</section>
<!-- Optional JavaScript -->
<script src="scripts/showEx.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>