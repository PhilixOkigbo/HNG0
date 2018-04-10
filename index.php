<html>
    <head>
        <title>Simple Web Page</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <section class="background">
            <img src="untitled.png" >
            
            <div class="content">
                <div class="welcome">YOU ARE WELCOME TO HNG-Internship 4.0</div>
                <div class="clock" id="clock">
                    <?php
                        echo "The Time is ".date("h:i:sa");
                    ?>
                     </div>
            </div>
        </section>
        
    </body>
</html>