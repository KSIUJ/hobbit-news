<?php 

$MAXID = 4; //change me
$ID = $_GET['id'] != "" ? $_GET['id'] : 1;
$NEXTID = $ID+1 <= $MAXID ? $ID+1 : 1;

?><!DOCTYPE html>
<html>
<head>
    <title>HOBBIT</title>
    <style>
    * {
        font-family: 'Marcellus', 'Times New Roman', serif;
    	padding: 0px;
    	margin: 0px;
    	text-align: center;
    	cursor: none !important;
    }
    html, body{
        width: 1024px; height: 600px; 
        overflow: hidden; /* does not work on chrome? */
    }
    @-webkit-keyframes super-rainbow {
        0% {
            background: #ffff00;
        }
        20% {
            background: #ffcd00;
        }
        40% {
            background: #c3d74b;
        }
        60% {
            background: #c3d7d7;
        }
        80% {
            background: #ffc39b;
        }
        100% {
            background: #ffff00;
        }
    }
    @-moz-keyframes super-rainbow {
        0% {
            background: #ffff00;
        }
        20% {
            background: #ffcd00;
        }
        40% {
            background: #c3d74b;
        }
        60% {
            background: #c3d7d7;
        }
        80% {
            background: #ffc39b;
        }
        100% {
            background: #ffff00;
        }
    }
    body {
        padding: 0px;
        background-color:#eee;
    }
    #permanent {
        width: 1024px;
    	height: 600px;
        font-size:24px;
        -webkit-animation: super-rainbow 5s infinite linear;
        -moz-animation: super-rainbow 5s infinite linear;
    }
    #container {
        -webkit-animation: super-rainbow 5s infinite linear;
        -moz-animation: super-rainbow 5s infinite linear;
    }

    #foo{
        font-family: Courier New,monospace !important; 
        font-weight: bold;
        margin-top: -10px;
    }
    #napis {
        background: rgba(0,0,0,0.1); 
        height: 50px; 
        max-width: 1024px;
        font-size: 40px; 
    }
    </style>
    <SCRIPT SRC="http://code.jquery.com/jquery-1.11.3.min.js"></SCRIPT>
    <script>
    $( document ).ready(function() { 
        var i=-1000;
        setInterval(function(){ 
            $("#foo").css('margin-left',-i)
            i+=5
            if (i>Math.max($("#foo").width(), 1024))  i=-1000
        }, 50);
    });
    </script>
    <script>
        setTimeout(function(){location.href="index.php?id=<?php echo $NEXTID; ?>"} , 30 * 1000);
    </script>
</head>
<body>
    <div id="container">
        <div id="permanent">
        	<img src="imgs/hobbit<?php echo $ID; ?>.png" height="550px" />
            <div id="napis">
        	   <span id="foo">
                    <?php echo file_get_contents("./napis.txt", FILE_USE_INCLUDE_PATH); ?>
                </span>
            </div>
        </div>
    </div>
</body>
</html>