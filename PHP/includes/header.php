<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <Style>
        body {
            background-color: #dcdbd9;
            color: #2c2c2c;
            font: normal 100% Cambria, Georgia, Serif;
        }
        
        .container {
            width: 90%;
            margin: 0 auto;
        }
        
        #nav {
            font-size: 1em;
            font-weight: normal;
            text-align: right;
        }
        
        #nav ul {
            height: auto;
            padding: 0px;
            margin: 0px;
        }
        
        #nav li {
            display: inline;
            padding: 15px;
        }
        
        #nav a{
            text-decoration: none;
            color: #000000;
            transition: all .15s ease;
            border-radius: 5px;
            
        }
        
        #nav a:hover {
            background-color: black;
            color: #ffffff;
            text-decoration: none;
            padding: 5px 15px;
        }
        
        .hLine {
            width: 100%;
            height: 1px;
            background: black;
            margin-top: 15px;
/*            margin: 0 auto;*/
        }

    </Style>
</head>
<body>
<div class="container">
    <div id="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
       
    </div>
     <div class="hLine"></div>
</div>

</body>
</html>