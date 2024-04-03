<?php
function drinkWater() {
  global $location, $is_thirsty, $drank_toilet_water;

  if ($location === "kitchen") {
    print "You get a tall glass of water. Refreshing!\n";
    $is_thirsty = false;
  } elseif ($location === "bathroom") {
    print "What are you trying to pull here?! Do you actually want to take a drink here?\n(*yes* or *no*.)\n";
    $confirm = strtolower(readline(">> "));

    if ($confirm === "yes") {
      print "Gross... You, um, stick your head in the toilet bowl and gulp down the water until you're full. Weirdo.\n";
      $is_thirsty = false;
      $drank_toilet_water = true;
    } elseif ($confirm === "no") {
      print "You decide your standards are above toilet water, thankfully.";
    }
  } else {
    print "There's no water here!";
  }

}
