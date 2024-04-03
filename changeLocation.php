<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  print "Where do you want to go?\n";
  $goto = strtolower(readline(">> "));
  
  if ($location === "kitchen" && $goto === "bathroom") {
    print "You go to the bathroom.\n";
    $location = $goto;
  } elseif ($location === "kitchen" && $goto === "woods") {
    print "You creep along the decrepit stone path set between rotted trees, delving deep into the Terror Woods.\n";
    $location = $goto;
  } elseif ($location === "bathroom" && $goto === "kitchen") {
    print "You exit the $location and return to the $goto.\n";
    $location = $goto;
  } elseif ($location === "woods" && $goto === "kitchen") {
    print "You trace your steps to the best of your ability and breathe a sigh of relief as you return to the $goto.\n";
    $location = $goto;
  } elseif ($goto === "woods" || $goto === "kitchen" || $goto === "bathroom") {
    print "You find yourself unable to go to the $goto directly from your current location. Try going somewhere else first.\n";
  } else {
    print "You find what you just said to be nonsensical. You consider the \"look around\" command.\n";
  }
  
}
