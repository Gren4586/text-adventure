<?php
  
function cookSoup(){
	global $location, $has_mushrooms, $has_soup;

  if (!($location === "kitchen" && $has_mushrooms)) {
    print "How do you expect to cook like this?! You have nothing to cook and no tools!\n(You have to be in the kitchen and have some ingredients to cook.)\n";
  } else {
    print "Yum, yum! You've made some delicious mushroom soup. The queen of all soups!\n";
    $has_mushrooms = false;
    $has_soup = true;
  }
  
}
