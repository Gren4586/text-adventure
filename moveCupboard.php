<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard, $is_thirsty;

	// Write your code here:
  $ready_to_work = !$is_hungry && $wearing_contacts && !$wearing_glasses && !$needs_to_pee && !$is_thirsty;
  
  if ($location !== "kitchen") {
    print "You don't really see a cupboard here..\n";
  } elseif ($moved_cupboard) {
    print "You've already moved the dang cupboard! Do you want to tear it off or something?\n";
  } elseif (!$ready_to_work) {
    print "You aren't ready to work yet! You're still hungry and thirsty, your bladder is just about ready to burst, and you can't see a dang thing, and those glasses just don't do the trick. As it stands, there's no point in trying to move the cupboard.\n";
  } else {
    print "With heft, you slide the cupboard to the right. With it out of the way, a safe crudely fit into the wall is revealed.\n";
    $moved_cupboard = true;
  }
}
