<!doctype html>

<html lang="en">

<head>

    <title>Clear Supply</title>
    
        <!-- Favico -->
    <link rel="icon" href="fav.ico" type="image/ico"/>

        <!-- Meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/> 
    <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- PT Mono -->
    <link href='http://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>

        <!-- Include CSS -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
    <!-- Include jQuery latest -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
    
    <!-- Scripts -->

    
</head>

<body>

    <!--div class="break">
        <div id="left"><p class="title">CPPM 1</p></div>
        <div id="right"><p class="logo">Polaar</p></div>
    </div-->
    
    
    <!--div class="break">
        <div id="text"><p class="paragraph">
        TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT
        </p></div>
    </div-->
    
    <?php
        $dirname = "1/";
        $images = glob($dirname."*.*");

    

        natsort($images);
        foreach($images as $image) {
        echo '<div class="wrap"><img src="'.$image.'" /></div><br/>';
        }
    ?>
    
    <div class="break"></div>
    
    
</body>  

</html> 