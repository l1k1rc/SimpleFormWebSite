<?php require('expectV.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Test</title>
    <!-- <link rel="icon" href="pictures/iconCar.png" /> -->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
<body>
<div class="form__group field">
  <form action="index.php" method="POST" autocomplete="on">
    <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
    <label for="name" class="form__label">Name</label>
  </form>
</div>
<?php
      if(isset($_POST['name']))
        insertdata($_POST['name']);
?>
</body>
</html>