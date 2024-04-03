<?php
  // Describe current location
	function lookAround(){
	global $location, $wearing_glasses, $wearing_contacts, $moved_cupboard;

  if ($wearing_glasses xor $wearing_contacts) {
    switch ($location) {
      case "kitchen":
        print "Ah, the kitchen, the territory of many aspiring home cooks. It comes with all the tools and ingredients you'd need to cook up some mushroom soup! Except the mushrooms, that is.\n\nFrom here, you can see the door to the *bathroom* and the back door, which leads to the *woods*...\n\n";
        if ($moved_cupboard) {
          print "The cupboard is off to the side, revealing a safe built into the wall it's mounted on..\n";
        } else {
          print "Oh yeah, you also notice the cupboard seems strangely big, not to mention the wear and tear on that particular wall.\n";
        }
        break;
      case "bathroom":
        print "Just your industry standard bathroom, mirror and everything. From here you can get to the *kitchen*. You read online that toilets are magical, but it doesn't seem worth looking into right now.";
        break;
      case "woods":
        print "Huh, as it turns out these woods aren't all that scary after all. All except for the insane amount of mushrooms, there's gotta be at least a million of them here!\nBehind you is the path leading back to the *kitchen*.";
    }
  } else {
    print "The details are hard to make out...\n";
  }
  
}
