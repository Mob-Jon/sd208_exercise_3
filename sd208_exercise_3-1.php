<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>c</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Change Clickbait headlines</h1>
            <p>
                Hate click bait?
            </p>
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" method="post">
                    <textarea placeholder = "Paste a click bait headline here." class="form-control input-lg" name="clickBaitHeadline">
                    </textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg" name="fixSubmit">Change clickbait headline</button>
                </form>
            </div>
            <br>

            <?php

            $clickBait_words = array("scientists", 
                            "doctors", 
                            "hate", 
                            "stupid", 
                            "weird", 
                            "simple", 
                            "trick", 
                            "shocked me", 
                            "you'll never believe",     
                            "hack", 
                            "epic", 
                            "unbelievable"
                        );

            $replacement_words = array("so-called scientists", 
                            "so-called doctors", 
                            "aren't threatened by", 
                            "average", 
                            "completely normal", 
                            "ineffective", 
                            "method", 
                            "is no different than the others", 
                            "you won't really be surprised by", 
                            "slightly improve", 
                            "boring", 
                            "normal"
                        );
            $clickBait = strtolower($_POST["clickBaitHeadline"]);

            function headline($clickBaitwords,$replacementwords,$click){

                if(isset($_POST["fixSubmit"])) {
                    $honestHeadline = str_replace($clickBaitwords, $replacementwords, $click);
                
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".$click."</h4><hr>";   

                    echo "<strong class='text-success'>Honest Headline</strong><h4>".$honestHeadline."</h4>";   
                }
            }
            headline($clickBait_words,$replacement_words,$clickBait);
            ?>

        </div>
       
    </body>
</html> 
