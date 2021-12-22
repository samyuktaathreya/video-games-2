<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="test.css">
    </head>
<style>
  img.bg {
    /* Set rules to fill background */
    min-height: 100%;
    min-width: 1024px;

    /* Set up proportionate scaling */
    width: 100%;
    height: auto;

    /* Set up positioning */
    position: fixed;
    top: 0;
    left: 0;
  }

  @media screen and (max-width: 1024px) {
    img.bg {
      left: 50%;
      margin-left: -512px;
    }
  }

  #page-wrap {
    position: relative;
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    -moz-box-shadow: 0 0 20px black;
    -webkit-box-shadow: 0 0 20px black;
    box-shadow: 0 0 20px black;
  }

  p {
    margin: 0 0 30px 0;
    font-size: medium;
    text-indent: 40px;
  }
</style>

<body class="body">
  <div id="repeat">
    <img src="https://user-images.githubusercontent.com/94490873/145647754-21a66e77-2c8a-435a-ae35-f2d644c54d14.png"
      class="bg">
    <!--welcome animation -->

    <div class="welcomePage">

     <center> <h1>WELCOME<h1></center>
    </div>

  </div>

  <!--animation -->
  <div class="maintingz">
    <div class="topnav" id="myTopnav">
      <img src="https://user-images.githubusercontent.com/94490873/145520543-178c115d-c35d-4eba-9ec9-3fcf22d60600.png "
        alt="logo" style="width: 100px;height:50px;float:right">
      <a href="homepage.html" class="active">Home</a>
      <a href="rdr2.html">Red Dead Redemption 2</a>
      <a href="valorant.html">Valorant</a>
      <a href="needforspeed.html">Need For Speed</a>
      <a href="quiz.html">Quiz</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      <a href="index.php">Browse Articles</a>
    </div>

</head>
<body>
<style>
body {
  background-image: url('https://user-images.githubusercontent.com/94490873/145647754-21a66e77-2c8a-435a-ae35-f2d644c54d14.png');
}
</style>
</body>