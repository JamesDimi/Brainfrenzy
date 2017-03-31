<?php
session_start();
?>

<html>
<body>

<?php
/*
 * Id - correct
 * 1    c
 * 2    a
 * 3    c
 * 4    d
 * 5    c
 * 6    c 
 * 7    d
 * 8    b
 * 9    c
 * 10   a
 */
$answers=["c","a","c","d","c","c","d","b","c","a"];

$id=[];
$id=$_SESSION["ids"];
$answer_1=$_GET[$id[0]];
$answer_2=$_GET[$id[1]];
$answer_3=$_GET[$id[2]];
$answer_4=$_GET[$id[3]];
$answer_5=$_GET[$id[4]];
$answer_6=$_GET[$id[5]];

global $score;
$score = 0 ;

if($answer_1==$answers[(int)$id[0]]){

    $score++;}
if($answer_2==$answers[(int)$id[1]]){

    $score++;}
if($answer_3==$answers[(int)$id[2]]){

    $score++;}
if($answer_4==$answers[(int)$id[3]]){

    $score++;}
if($answer_5==$answers[(int)$id[4]]){

    $score++;}
if($answer_6==$answers[(int)$id[5]]){

    $score++;}
$time1=$_SESSION["time"];

$time2=time();
global $final_time;
$final_time=$time2-$time1;
?>

<H1> RESULTS </H1><?php echo $score;?><br>
<?php echo $final_time." Seconds";?><br>




</body>
</html>