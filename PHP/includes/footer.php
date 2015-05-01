<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    

<!-- ****** PHP ADD-INS ***** -->
    
    <?php

    date_default_timezone_set('Canada/Mountain');

    $today = date('F j, Y');
    $thisYear = date('Y');

?>
    
    
    
    <style>
       body {
            background-color: #dcdbd9;
            color: #2c2c2c;
            font: normal 100% Cambria, Georgia, Serif;
        }
        
         .container {
            width: 90%;
            margin: 0 auto;
        }

        h1 {
            font-size: 1.5em; /* 24px / 16px = 1.5  USE EMs TO CREATE FLEXIBLE FONTS */
            font-style: italic;
            font-weight: normal;
        }

        h1 a {
            color: #747474;
            font: bold 0.458333333333333em Calibri, Optima, Arial, sans-serif; /* “set the font-size of the link in ems; divide the target of 11px by the value set on the headline, 24px, and the  new context = 0.458333333333333 */
            letter-spacing: 0.15em;
            text-transform: uppercase;
            text-decoration: none;
        }
        
        .hLine {
            width: 100%;
            height: 1px;
            background: black;
            margin-top: 15px;
        }
        
        #copyright {
            text-align: right;   
        }
        
        small {
            text-align: right;
        }

    </style>
</head>
    
<body>

    <div class="container">
        
        <div class="hLine"></div>
        
        <small id="copyright">&copy;<?php echo $thisYear; ?> PHP Includes</small>
    
    </div>

</body>
</html>