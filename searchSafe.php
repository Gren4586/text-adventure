<?php

function searchSafe(){
	// Write your code here:
  global $location, $moved_cupboard, $rounds_left;
  
  if ($location !== "kitchen" || !$moved_cupboard) {
    print "You can't seem to find a safe to search..\n";
  } else {
    print "Remembering a code you saw written down the other day (It was \"1234\"), you hold your breath as the safe creaks open. After a very tense moment of anticipation, you pull out the contents! It's a chocolate Mickey Mouse, wrapped in glorious golden foil! Delicious!\nYOU WIN THE GAME!!!!\n\n";
    $rounds_left = 1;
  }
                 
}  
