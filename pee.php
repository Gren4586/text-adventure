<?php
  
function pee(){
	global $location, $needs_to_pee;

  if ($location === "woods") {
    print "You find a nice looking tree and \"water\" it.";
    $needs_to_pee = false;
  } elseif ($location === "bathroom") {
    print "You open the floodgates and relieve yourself. Sweet salvation!";
    $needs_to_pee = false;
  } else {
    print "What the hey are you trying to do?! You can't pee here!!";
  }
   
}
