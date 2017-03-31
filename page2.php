<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>START</title>
</head>
<body>
<h1>LETS START</h1><br>
<?php

global $array;
/*ανα 5 η καθε ερωτηση
 * 0-5
 * 6-12
 */
global $array;
$array=[" What is the time at MidNight?","14:00","15:00","00:00","04:00",
    "Which American state is nearest to the former Soviet Union?","ALASKA","NEW YORK","NEW MEXICO","CHICAGO",
    "What is converted into alcohol during brewing?","LEMON","ORANGE","SUGAR","STEVIA",
    "Which US state is named on the label of a Jack Daniels bottle?","TEXAS","VIRGINIA","NEVADA","TENNESSEE",
    "Which Country won the Uefa Euro 2004?","SPAIN","PORTUGAL","ITALY","GREECE",
    "Who is NOT a native American ?","MAYA","APACHE","VIKING","CHEROKEE",
    "In what year was Google launched on the web?","2001","2000","1996","1998",
    "The Eiffel Tower is located where in Paris?","BOIS DE BOULOGNE","CHAMP DE MARS","JARDIN DES PLANTES","PARC DE BELLEVILLE",
    "Which Apollo mission landed the first humans on the Moon?","APOLLO 7","APOLLO 9","APOLLO 11","APOLLO 13",
    "The reactor at the site of the Chernobyl nuclear disaster is now in which country?","UKRAINE","SLOVAKIA","HUNGARY","RUSSIA"];

/*
 in_array(search,array,type)
 */
$_SESSION["time"]=time();
$random=mt_rand(0,9);
global $id;
$id =[strval($random)];
while(true){
    $random=mt_rand(0,9);
    if(! in_array(strval($random),$id) ){
        array_push($id,strval($random));
    }
    if(count($id)==6){break;}
}


global $questions;
$questions =[];


for($i=0;$i<count($id);$i++){
    array_push($questions,$array[5*$id[$i]]);
    array_push($questions,$array[5*$id[$i]+1]);
    array_push($questions,$array[5*$id[$i]+2]);
    array_push($questions,$array[5*$id[$i]+3]);
    array_push($questions,$array[5*$id[$i]+4]);
}

$_SESSION["ids"]=$id;




?>


<form action="check.php" method="get">

    <p class="question">1. <?php echo $questions[0];?></p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[0];?>" value="a" ><?php echo $questions[1];?> <br>
        b) <input type="radio" name="<?php echo $id[0];?>" value="b" ><?php echo $questions[2];?><br>
        c) <input type="radio" name="<?php echo $id[0];?>" value="c" ><?php echo $questions[3];?><br>
        d) <input type="radio" name="<?php echo $id[0];?>" value="d" ><?php echo $questions[4];?><br>
    </ul><br>

    <p class="question">2. <?php echo $questions[5];?>  </p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[1];?>" value="a" ><?php echo $questions[6];?><br>
        b) <input type="radio" name="<?php echo $id[1];?>" value="b" ><?php echo $questions[7];?><br>
        c) <input type="radio" name="<?php echo $id[1];?>" value="c" ><?php echo $questions[8];?><br>
        d) <input type="radio" name="<?php echo $id[1];?>" value="d" ><?php echo $questions[9];?><br>
    </ul>

    <p class="question">3. <?php echo $questions[10];?> </p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[2];?>" value="a" ><?php echo $questions[11];?><br>
        b) <input type="radio" name="<?php echo $id[2];?>" value="b" ><?php echo $questions[12];?><br>
        c) <input type="radio" name="<?php echo $id[2];?>" value="c" ><?php echo $questions[13];?><br>
        d) <input type="radio" name="<?php echo $id[2];?>" value="d" ><?php echo $questions[14];?><br>
    </ul>

    <p class="question">4. <?php echo $questions[15];?></p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[3];?>" value="a" ><?php echo $questions[16];?><br>
        b) <input type="radio" name="<?php echo $id[3];?>" value="b" ><?php echo $questions[17];?><br>
        c) <input type="radio" name="<?php echo $id[3];?>" value="c" ><?php echo $questions[18];?><br>
        d) <input type="radio" name="<?php echo $id[3];?>" value="d" ><?php echo $questions[19];?><br>
    </ul>

    <p class="question">5. <?php echo $questions[20];?></p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[4];?>" value="a" ><?php echo $questions[21];?><br>
        b) <input type="radio" name="<?php echo $id[4];?>" value="b" ><?php echo $questions[22];?><br>
        c) <input type="radio" name="<?php echo $id[4];?>" value="c" ><?php echo $questions[23];?><br>
        d) <input type="radio" name="<?php echo $id[4];?>" value="d" ><?php echo $questions[24];?><br>
    </ul>

    <p class="question">6. <?php echo $questions[25];?></p>
    <ul class="answers">
        a)<input type="radio" name="<?php echo $id[5];?>" value="a" ><?php echo $questions[26];?><br>
        b) <input type="radio" name="<?php echo $id[5];?>" value="b" ><?php echo $questions[27];?><br>
        c) <input type="radio" name="<?php echo $id[5];?>" value="c" ><?php echo $questions[28];?><br>
        d) <input type="radio" name="<?php echo $id[5];?>" value="d" ><?php echo $questions[29];?><br>
    </ul>

    <input type="submit" value="Submit">

</form>
</body>
</html>