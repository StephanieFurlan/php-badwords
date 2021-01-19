<?php
   $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
   $badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>PHP - Badwords</title>
   </head>
   <body>
      <h1>Original paragraph</h1>
      <p><?php echo $paragraph ?></p>
      <h1>Paragraph length</h1>
      <p><?php echo strlen($paragraph)?></p>
      <h1>Paragraph with ***</h1>
      <p><?php echo str_replace($badword,"***",$paragraph); ?></p>
   </body>
</html>
