<?php
session_start();
$_SESSION["rcount"] = "23";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_24.php";
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
    <title>Recommendation 23</title>
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
            <img src="../Images/food_images/r23foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Iced Pumpkin Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">Wonderful spicy iced pumpkin cookies that both kids and adults love!
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>121.1 Calories</li>
                    <li>12.9 mg cholesterol</li>
                    <li>120.5 mg sodium</li>
                    <li>22.4 g carbohydrates</li>
                    <li>1.2 g protein</li>
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
                                <li>2 ½ cups all-purpose flour</li>
                                <li>1 teaspoon baking powder</li>
                                <li>1 teaspoon baking soda</li>
                                <li>2 teaspoons ground cinnamon</li>
                                <li>½ teaspoon ground nutmeg</li>
                                <li>½ teaspoon ground cloves</li>
                                <li>½ teaspoon salt</li>
                                <li>½ cup butter, softened</li>
                                <li>1 ½ cups white sugar</li>
                                <li>1 cup canned pumpkin puree</li>
                                <li>1 egg</li>
                                <li>1 teaspoon vanilla extract</li>
                                <li>2 cups confectioners' sugar</li>
                                <li>3 tablespoons milk</li>
                                <li>1 tablespoon melted butter</li>
                                <li>1 teaspoon vanilla extract</li>
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
                                    1. Preheat oven to 350 degrees F (175 degrees C). Combine flour, baking powder,
                                    baking soda, cinnamon, nutmeg, ground cloves, and salt; set aside.
                                </li>
                                <li>
                                    2. In a medium bowl, cream together the 1/2 cup of butter and white sugar. Add
                                    pumpkin, egg, and 1 teaspoon vanilla to butter mixture, and beat until creamy. Mix
                                    in dry ingredients. Drop on cookie sheet by tablespoonfuls; flatten slightly.
                                </li>
                                <li>
                                    3. Bake for 15 to 20 minutes in the preheated oven. Cool cookies, then drizzle glaze with fork.
                                </li>
                                <li>4. To Make Glaze: Combine confectioners' sugar, milk, 1 tablespoon melted butter,
                                    and 1 teaspoon vanilla. Add milk as needed, to achieve drizzling consistency.
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
                        This recipe is recommended to you because it is a highly rated recipe for peanut butter flavoured.
                        This matches one of your favorite cookie types.
                    </p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.9. The most common
                        positive feature of this recipe was the icing used with the peanut butter cookie. This feature
                        was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r23Cropped.jpg" alt="image missing">
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