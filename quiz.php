<?php
$score = 0;
echo "=====welcome to the quiz app=====\n";

echo "What is the capital of France \n";
echo "a. Dhaka \n";
echo "b. Paris \n";
echo "c. khulna \n";

//user answer
echo "Your answer :";
$answer1 = trim(fgets(STDIN));

if($answer1 == "b"){
    echo "correct answer";
    $score++;
}else{
    echo "Incorrect answer \n";
}

//question2
echo "2+2=? \n";
echo "a. 2 \n";
echo "b. 3 \n";
echo "c. 4 \n";

//user answer
echo "Your answer :";
$answer2 = trim(fgets(STDIN));

if($answer2 == "c"){
    echo "correct answer \n";
    $score++;
}else{
    echo "Incorrect answer \n";
}

//question3
echo "3 * 5 = ? \n";
echo "a. 15 \n";
echo "b. 21 \n";
echo "c. 23 \n";

//user answer
echo "Your answer :";
$answer3= trim(fgets(STDIN));

if($answer3 == "a"){
    echo "correct answer \n";
    $score++;
}else{
    echo "Incorrect answer \n";
}

echo "You got $score out of 3 \n";
echo "====quiz finish=====";