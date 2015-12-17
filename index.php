    <html>
        <head>
            <meta charset="UTF-8">
            <title>Security Project</title>  
        </head>
        <body bgcolor="#E6E6FA"><center><h1> Full Vigenre  </h1>
    	<font  color="green">
            This App illustrates encryption and via full vigenre.</br> <br> </font>
    <form name="encryption"  method="post" action="">	
        
           <h2> Encryption</h2>
           <br><h4>Plain Text :<h6>enter the plain text without space</h6></h4> <textarea name="plain" rows="5" cols="50"></textarea>  <br> <br>
                 Key : <input type="text" name="key">
                 Number of letters : <input type="text" name="nLetters">
                 <input type="submit" name="encrypt" value="encrypt">
                    <br> <br> </p>          
     <?php
        if (isset($_POST['encrypt'])){
        $text=$_POST['plain'];
        $key= $_POST['key'];       
        $finalText = "";
        $numberOfLetters = $_POST['nLetters'];
        $textlen = strlen( $text );
        $keylen = strlen( $key );
        $y = range('a','z');
        for( $i = 0; $i < $textlen; $i++ ) {
            $char = substr( $text, $i, 1 );
            if($char == ' ')
              $finalText .= " ";
              else
            $finalText .= $y[ ( ord($char)- ord('a') + ord($key[$i%$keylen])- ord('a') )%$numberOfLetters ];
        }
      

               echo "<h3>Cipher IS<h3>" ;
                       echo $finalText;
                     }
                    ?>
       </center>      
    </center> </form>
        </body>
    </html>

