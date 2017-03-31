<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Brainfrenzy</title>
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="BrainfrenzyStyle.css">
        <!-- Note to myself: insert your .js file AFTER inserting your jQuery sources...(took me 1 hour to  figure out xD Time to change major lol) -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
        <script src="BrainfrenzyScript.js"></script>
    </head>

    <body class="container-fluid">
        <div class="row">
            <div class="col-mod-4 col-md-offset-4 col-xs-4 col-md-offset-4 text-center text-responsive" style="font-size: 2.5em; font-family: lobster;">
                Brainfrenzy<br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4" id="welcome">
                <strong style="font-size: 20px; font-family: lobster;">Lets.</strong>
                <br>
                <button class="btn btn-block" id="playbtn">Play</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-xs-4 col-xs-offset-4 text-center" id="content"></div>
        </div>

        <script>
            $("#playbtn").click(function(){
                $("#welcome").fadeOut(300);
                getQuestion();
            });
        </script>
    </body>
</html>