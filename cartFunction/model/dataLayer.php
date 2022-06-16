<?php
function element_select($productName, $productPrice, $productImage){
$foodItems ="
<div class=\"col-md-3 col-sm-6 my-3 md-0\">
<form action=\"index.php\" method=\"post\" id=\"myForm\" class=\"form-horizontal\">
                <div class=\"card shadow\">
                    <div>
                    <img src=\"$productImage\" alt=\"asian rice\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$productName</h5>
                    <h6>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"fas fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">Lorem Ipsum dolor sit amet, consectetur adipis</p>
                    <h5>
                        <small><s class=\"text-secondary\">$productPrice</s></small>
                        <span class=\"price\">$21.99</span>
                    </h5>
                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
                </div>

        </div>
            </form>
            </div>";
echo $foodItems;
}
/*
 *    <?php
            element_select("Product1", 21.99, "../images/asian2.png");
            element_select("Afghan Food", 19.89,"../images/afghan2.png");
            element_select("Nigerian Food",20.79,"../images/nigerian2.jpg");
            element_select("Asian Rice",23.79,"../images/asian.png");
            ?>
 */