<?php
session_start();
$_SESSION["rcount"] = "7";
$_SESSION["NextR"] = "Location: recommendations/sessionEX_8.php";
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
    <title>Recommendation 7</title>
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
            <img src="../Images/food_images/r7foodimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Chocolate Chocolate Chip Cookies</h5>
                <h6>Description</h6>
                <p class="card-text">These cookies are great...you get a double dose of chocolate! My kids love them.
                </p>
                <h6>Nutrition Facts</h6>
                <p>Per Serving</p>
                <ul>
                    <li>124.7 Calories</li>
                    <li>17.9 mg cholesterol</li>
                    <li>63.1 mg sodium</li>
                    <li>15.5 g carbohydrates</li>
                    <li>1.5 g protein</li>
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
                                <li>1 cup butter, softened</li>
                                <li>1 ½ cups white sugar</li>
                                <li>2 eggs</li>
                                <li>2 teaspoons vanilla extract</li>
                                <li>2 cups all-purpose flour</li>
                                <li>⅔ cup cocoa powder</li>
                                <li>¾ teaspoon baking soda</li>
                                <li>¼ teaspoon salt</li>
                                <li>2 cups semisweet chocolate chips</li>
                                <li>½ cup chopped walnuts</li>
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
                                <li>1. Preheat oven to 350 degrees F (175 degrees C).
                                </li>
                                <li>
                                    2. In a large bowl, cream together the butter, butter flavored shortening, brown
                                    sugar, white sugar, eggs, and vanilla until smooth. Combine the flour, baking soda,
                                    cinnamon, cloves, and salt; stir into the sugar mixture. Stir in the oats and raisins.
                                    Drop by rounded teaspoonfuls onto ungreased cookie sheets.
                                </li>
                                <li>
                                    3. Bake 10 to 12 minutes until light and golden. Do not overbake. Let them cool for
                                    2 minutes before removing from cookie sheets to cool completely. Store in airtight
                                    container. Make sure you get some, because they don't last long!
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
                        This recipe is recommended to you because it is a highly rated cookie recipe with an emphasis on
                        chocolate.
                    </p>
                </div>
            </div>

            <div id="tech_EX" class="card">
                <div class="card-body">
                    <p>
                        Users who are similar to you gave this recipe an average star ratting of 4.6. The most common
                        positive feature of this recipe was cake/brownie like taste the cookies had.
                        This feature was extracted using a sentence level analysis of reviews from users most similar to you.
                    </p>
                </div>
            </div>

            <div id="visual_EX" class="card" style="width: 100%">
                <img class="card-img-top" src="../Images/wordclouds/r7Cropped.jpg" alt="image missing">
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