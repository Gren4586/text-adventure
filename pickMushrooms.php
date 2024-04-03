<?php
  
function pickMushrooms(){
	global $location, $has_mushrooms;

  if ($location != "woods") {
    print "There ain't no got dang mushrooms here!";
  } else {
    print "These'll do ya just fine, yes they will!\n(You acquired some mushrooms.)";
    $has_mushrooms = true;
  }
          
}  
