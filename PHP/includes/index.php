<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            background-color: #dcdbd9;
            color: #2c2c2c;
            font: normal 100% Cambria, Georgia, Serif;
        }
        
        .containerMain {
            width: 90%;
            margin: 0 auto;
/*            background-color: white;*/
            padding: 10px;
        }
        
        .blogContainer {
            width: 95%;
            margin: 0 auto;
            padding: 10px;
            background-color: white;
        }

        h1 {
            font-size: 1.5em; /* 24px / 16px = 1.5  USE EMs TO CREATE FLEXIBLE FONTS */
            font-style: italic;
            font-weight: normal;
            text-align: center;
            margin: 30px 0px 30px 0px;
        }

        h1 a {
            color: #747474;
            font: bold 0.458333333333333em Calibri, Optima, Arial, sans-serif;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            text-decoration: none;
        }
        
        h2 {
         margin: 50px 0px 30px 0px;   
        }
        
        #about {
         text-align: center;   
        }
        
/* CONTACT FORM STYLING */       

        form { /* Center the form within the page */
            margin: 0 auto;
            width: 50%;
        }
        
        label {
            display: block;
            margin-top: 20px;
            letter-spacing: 2px;
        }
        
        input, textarea { /* Styling the text boxes */
            width:400px;
            height:25px;
            background:#efefef;
            border:1px solid #dedede;
            padding:10px;
            margin-top:3px;
            font-size:0.9em;
            color:#3a3a3a;
            border-radius:5px;
        }
        
        input:focus, textarea:focus {
            border:1px solid #97d6eb;
        }
        
        textarea {
            height: 100px;   
        }
        
        #submit {
            width:127px;
            height:38px;
            border:none;
            margin-top:20px;
            cursor:pointer;
        }

            #submit:hover {
                opacity:.9;
                color: white;
                background-color: black;
                padding: 5px 15px;
            }
        

        .formMessage {
            text-align: center;    
        }

    </style>
</head>
<body>
    
<!-- *******HEADER INCLUDE******* -->
    
      <?php include("header.php"); ?>
    
<!-- *******MAIN CONTENT******* -->

<div class="containerMain">
    
    <div class="blogContainer">
    
        <h1>Basic Multi-page PHP Website</h1>
    
        <p id="about">Uses PHP includes + Contact Form using $_POST and PHP sendmail() with SPAM prevention. </p>
    
<!-- *******CONTACT FORM******* 
sends email using PHP sendmail() PHP will handle the form data. -->
    
        <form method="post" action="index.php">
            
            <h2>Contact Us</h2>
        
            <label>Name</label>
            <input name="name" placeholder="Type Here">
            
            <label>Email</label>
            <input name="email" type="email" placeholder="Type Here">
            
            <label>Message</label>
            <textarea name="message" placeholder="Type your message here"></textarea> <br/>
            
            <label>*What is 2+3? (Anti-spam)</label>
            <input name="human" placeholder="Type Here">
            
            <input id="submit" name="submit" type="submit" value="Submit">
    
    </form>
    
        <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = 'From: PHP Includes'; 
            $to = 'juli@isdigit.al'; 
            $subject = 'Contact Form';
            $human = $_POST['human'];

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if ($_POST['submit'] && $human == '5') {				 
            if (mail ($to, $subject, $body, $from)) { 
            echo '<p class="formMessage">Your message has been sent!</p>';
        } else { 
            echo '<p class="formMessage">Something went wrong, go back and try again!</p>'; 
        } 
        } else if ($_POST['submit'] && $human != '4') {
        echo '<p class="formMessage">You answered the anti-spam question incorrectly!</p>';
        }
    ?>
    
    </div>
    
    
    
</div>
    
<!-- *******FOOTER INCLUDE******* -->
    
    <?php include("footer.php"); ?>
    
</body>
</html>