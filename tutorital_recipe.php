<?php
session_start();
$_SESSION["rcount"] = "1";
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
    <title>Example Recipe</title>
</head>
<body class="p-3 mb-2 bg-info text-black">
    <section id="EX_recipe">
        <section id="tutorial_recipe_content" style="width: 75%">
            <div class="card" style="width: auto;">
                <img src="Images/tutorialCookie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Best Chocolate Chip Cookies</h5>
                    <h6>Description</h6>
                    <p class="card-text">Crisp edges, chewy middles.</p>
                    <h6>Nutrition Facts</h6>
                    <p>Per Serving</p>
                    <ul>
                        <li>298 Calories</li>
                        <li>15.6 g total fat</li>
                        <li>36 mg cholesterol</li>
                        <li>166 mg sodium</li>
                        <li>38.9 g carbohydrates</li>
                        <li>3.6 g protein</li>
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
                                    <li>1 cup butter, softened</li>
                                    <li>1 cup white sugar</li>
                                    <li>1 cup packed brown sugar</li>
                                    <li>2 eggs</li>
                                    <li>2 teaspoons vanilla extract</li>
                                    <li>1 teaspoons baking soda</li>
                                    <li>2 teaspoons hot water</li>
                                    <li>1/2 teaspoon salt</li>
                                    <li>3 cups all-purpose flour</li>
                                    <li>2 cups semisweet chocolate chips</li>
                                    <li>1 cup chopped walnuts</li>
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
                                    <li>1. Preheat oven to 350 degrees F.</li>
                                    <li>2. Cream together the butter, white sugar, and brown sugar until smooth.</li>
                                    <li>3. Beat in the eggs.</li>
                                    <li>4. Bake for approximately 10 minuets, or until edges are nicely browned.</li>
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
                </div>
                <div id="tutorial_recipe_direction" class="card">
                    <p>
                        <b>
                            During the session you will view 25 different recipe recommendations. Each recipe will
                            display a photo of the food, a list of ingredients, and cooking instructions. To view
                            explanations for the recommendation, click any of the three buttons labeled simple explanation,
                            technical explanation, and visual explanation. Once you have viewed all the explanations,
                            click continue view instructions on taking the survey.
                        </b>
                    </p>
                    <a href="survey_explanation.php" target="_top" style="margin-top: 10px">
                        <button type="button" class="btn btn-primary">Continue</button>
                    </a>
                </div>
            </section>
            <section id="explanations" style="padding: 5px">
                <div id="simple_EX" class="card">
                    <div class="card-body">
                        <p>This recipe is recommended to you because it is the highest rated chocolate chip cooke recipe</p>
                    </div>
                </div>

                <div id="tech_EX" class="card">
                    <div class="card-body">
                        <p>
                            Users who are similar to you gave this recipe great reviews. The most common positive feature
                            of this recipe was that the cookies are chewy in the middle and crispy on the edges. These features
                            were extracted using a sentence level analysis of reviews from users most similar to you.
                        </p>
                    </div>
                </div>

                <div id="visual_EX" class="card" style="width: 100%">
                    <img class="card-img-top" src="Images/CropedWordCloud.jpg" alt="image missing">
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