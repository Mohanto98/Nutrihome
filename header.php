<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>header page</title>

    <!--Bootstap CDN start-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstap CDN end-->

    <!-- Font Awesome Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Icon CDN -->

    <link rel="stylesheet" href="styles/header.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="logo"><img src="media/logo.png" alt="Nutri Home"></a>
  <a href="index.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="mission.php">Mission</a>
  <a href="vission.php">Vission</a>
  <a href="service.php">Services</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>
