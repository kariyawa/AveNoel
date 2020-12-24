<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>


<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <?php
  require('src/view/template/header.php');
  echo $body;
  require('src/view/template/footer.php');
  ?>
</body>
</html>