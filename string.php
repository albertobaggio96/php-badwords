<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP2</title>
</head>
<body>
  <div>
  <?php
    echo $_GET["fullString"];
  ?>
  </div>
  <div>
    <?php 
    echo strlen($_GET["fullString"]);
    ?>
  </div>  

  <div>
    <?php 
    $censuredString = str_replace($_GET["banned"], "***", $_GET["fullString"]);
    echo $censuredString
    ?>
  </div>

  <div>
    <?php 
    echo strlen($censuredString);
    ?>
  </div>



</body>
</html>