<?php
session_start();
$_SESSION["rcount"] = "14";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_15.php";
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
    <title>Recommendation 14</title>
</head>
<body onload="startTime()" class="p-3 mb-2 bg-light text-black">
<section id="EX_recipe">
    <section id="tutorial_recipe_content" style="width: 75%">
        <?php
        $rCount = 25-$_SESSION["rcount"];
        $display = "<h6>".$rCount." recipes left to view.</h6>";
        echo $display;
        ?>
        <div class="card" style="width: auto;">
            <img src="../Images/food_images/r14foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Anna's Chocolate Chip Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">This is a recipe my friends' mom gave me and I thought the cookies were excellent!
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>119.9 Calories</li>
                    <li>17.9 mg cholesterol</li>
                    <li>107 mg sodium</li>
                    <li>16 g carbohydrates</li>
                    <li>1.3 g protein</li>
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
                                <li>1 cup butter</li>
                                <li>½ cup white sugar</li>
                                <li>1 cup packed brown sugar</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>2 eggs</li>
                                <li>2 ½ cups all-purpose flour</li>
                                <li>1 teaspoon baking soda</li>
                                <li>1 teaspoon salt</li>
                                <li>2 cups semisweet chocolate chips</li>
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
                                <li>
                                    1. Preheat oven to 350 degrees F (175 degrees C). Grease one 8 inch square pan, and
                                    line with greased foil.
                                </li>
                                <li>
                                    2. Combine brown sugar, flour, baking soda, salt, and rolled oats. Rub in the butter
                                    using your hands or a pastry blender to form a crumbly mixture. Press 2 cups of the
                                    mixture into the bottom of the prepared pan. Spread the jam to within 1/4 inch of
                                    the edge. Sprinkle the remaining crumb mixture over the top, and lightly press it
                                    into the jam.
                                </li>
                                <li>
                                    3. Bake for 35 to 40 minutes in preheated oven, or until lightly browned. Allow to
                                    cool before cutting into bars.
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
                    <!--<a href="../user_profile.php" target="_top" style="margin-top: 10px">-->
                        <button onclick="submitClicksViewUserProfile()" type="button" class="btn btn-primary">View User Profile</button>
                    <!--</a>-->
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
                        This recipe is recommended to you because it is a highly rated chocolate chip cookie recipe, this type
                        of cookies matches one of your favorites.
                    </p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.1. The most common
                        positive feature of this recipe was soft the cookies are.
                        This feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r14Cropped.jpg" alt="image missing">
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