<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NS-Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h3 align="center">conversion from octal to binary,decimal and hexadecimal</h3>
    <div class="container">
        <form action="octal-conversion.php" method="post">
            <label>Enter octal number</label>
            <input type="text" name="octal">
            
            <input  class="btn btn-dark" type="submit">
            <a  class="btn btn-dark" href="index.php">back</a>
        </form>
    </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
                $octal = $_POST['octal'];
        
        ?>
        <br>
        <?php
        
        $binary= base_convert($octal, 8, 2);
        echo "Octal: " . $octal . "\n";
        echo "Binary: " . $binary;

        
        ?>
        <br>
        <?php

        $decimal= base_convert($octal, 8, 10);
        echo "Octal: " . $octal . "\n";
        echo "Decimal: " . $decimal;        
        
        ?>
        <br>
        <?php

        $hexadecimal= base_convert($octal, 8, 16);
        echo "Octal: " . $octal . "\n";
        echo "Hexadecimal: " . $hexadecimal;  
        }      
        
        ?>
            
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>