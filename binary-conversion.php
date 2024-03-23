<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NS-Conversion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h3 align="center">conversion from binary to octal,decimal,hexadecimal</h3>
    <div class="container">
        <form action="binary-conversion.php" method="post">
            <label>Enter binary number</label>
            <input type="text" name="binary">
            
            <input  class="btn btn-dark" type="submit">
            <a class="btn btn-dark" href="index.php">back</a>
        </form>
    </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
                $binary = $_POST['binary'];
        
        ?>
        <br>
        <?php
        $octal= base_convert($binary, 2, 8);
        echo "Binary: " . $binary . "\n";
        echo "Octal: " . $octal;
        ?>
        <br>
        <?php        
        $decimal= base_convert($binary, 2, 10);
        echo "Binary: " . $binary . "\n";
        echo "Decimal: " . $decimal;
        ?>
        <br>
        <?php
        $hexadecimal= base_convert($binary, 2, 16);
        echo "Binary: " . $binary . "\n";
        echo "Hexadecimal: " . $hexadecimal;
        
        ?>
        <br>

        
        <?php
          }
        ?>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>