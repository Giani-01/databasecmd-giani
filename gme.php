<?php

// ASCII art for Michael Jackson victory screen
$win = "        ___
       /   \\
      | M.J |
       \\___/
        /|\\
       / | \\
        / \\
       /   \\
      O     O

      HEE-HEE! YOU FOUND ME!
";

// Nice intro screen for the game
printf("Welcome to the Michael Jackson simulator \n\n");
printf("      _______\n");
printf( "     //  $$ /|\n");
printf("    // $$  / |\n");
printf("   //_____/  |\n");
printf("  |          |\n");
printf("  |   __   |\n");
printf("  |  |__|  |\n");
printf("  |________|\n\n\n");
// /n means new line
//printf is like print but it allows you to format the string with variables and special characters like \n for new line, \t for tab, etc.
//variables are defined the things made with $ and u can use em for printf with %s for string, %d for integer
//the => is an assignment operator that assigns the value on the right to the variable on the left
// == is a comparison  checks if its iqual and gives u a true or false thing.
// ""is where you can put text and stuff in between 
// Question 1 - Three paths to choose from
printf("You find yourself at a crossroads with three paths ahead:\n");
printf("Option 1. This path leads to a creepy cabin in the woods\n");
printf("Option 2. This path leads to an amusement park that seems abandoned\n");
printf("Option 3. This path leads to a recording studio with music playing\n");
printf("Please make your choice 1, 2, or 3:\n");
// Collect answer
$userChoice = readline("");
// readline just reads the line

// Check the choice of the user: Option 1 (Cabin)
if ($userChoice == 1) {
    printf("You make your way to the cabin, but the light turn on when ur midway there. \n\n");
    printf("Option 1. Do you go there and ask for help?\n");
    printf("Option 2. Do you you hide before *he* comes out?\n");
    printf("Please make your choice 1 or 2:\n");
    // Collect answer
    $userChoice = readline("");
    // Option 1 --> show winning
    if ($userChoice == 1) {
        
        printf("You found michael jackson!!!\n\n");
        printf("%s", $win);
    }
    // Option 2 --> losing
    else if ($userChoice == 2) {
        printf("You hide but Michael Jackson finds you! THE END");
    }
}
// else if  it checks the next thingie if the first one is false

// Option 2 (Amusement Park)
else if ($userChoice == 2) {
    printf("You go to the amusement park. It turns out the park is called Neverland Ranch. Do you go in?\n");
    printf("Option 1. Do you go in?\n");
    printf("Option 2. Do you leave screaming?\n");
    printf("Please make your choice 1 or 2:\n");
    // Collect answer
    $userChoice = readline("");

    // Option 1 end game
    if ($userChoice == 1) {
        printf("You found a treasure chest full of money but not Michael Jackson!!! THE END\n\n");
    }
    // Option 2 end game
    else if ($userChoice == 2) {
        printf("After years searching you did not find the Michael Jackson... THE END");
    }
}


// Option 3 (Recording Studio) - NEW OPTION
else if ($userChoice == 3) {
    printf("You approach the recording studio and hear 'Thriller' playing! Do you enter?\n");
    printf("Option 1. Enter the studio and follow the music\n");
    printf("Option 2. Run away - it sounds too creepy\n");
    printf("Please make your choice 1 or 2:\n");
    // Collect answer
    $userChoice = readline("");

    // Option 1 --> show winning
    if ($userChoice == 1) {
        
        printf("The music gets louder and there he is - Michael Jackson in the recording booth!\n\n");
        printf("%s", $win);
    }
    // Option 2 --> losing
    else if ($userChoice == 2) {
        printf("You run away and never discover the truth. THE END");
    }
}
?>