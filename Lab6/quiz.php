<?php
$ans1 = $_GET[ans3];
$ans2 = $_GET[2.3];
$ans3 = $_GET[3.1];
$ans4 = $_GET[4.3];
$ans5 = $_GET[5.2];
$correct = 0
if(isset($_GET["submit"])){
    //Check if the correct answer have been select
    if($ans1){$correct = $correct+20;}
    if($ans2){$correct = $correct+20;}
    if($ans3){$correct = $correct+20;}
    if($ans4){$correct = $correct+20;}
    if($ans5){$correct = $correct+20;}
    echo "Your total point is: $correct%"
};
?>