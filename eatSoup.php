<?php
function eatSoup(){
	global $has_soup, $is_hungry;

  if (!$has_soup) {
    print "You haven't cooked anything to eat!";
  } else {
    print "You've heartily slurped down the soup. Invigorating!";
    $has_soup = false;
    $is_hungry = false;
  }
  
}
