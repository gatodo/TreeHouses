<?php
    require("./cig-bin/landingauth.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tr33Haus</title>
  <link rel="stylesheet" type="text/css" href="resources/style.css" />
  <link rel="stylesheet" type="text/css" href="resources/layout.css" />
</head>
<body class="blue">
  <div id="titlebar_wrapper" class="brown">
    <div id="titlebar" class="center">
      <img src="resources/TH_logo.png" id="logo" alt="Tr33Haus Logo" />
    </div>
  </div>
  <div id="content">
    <div id="page" class="center">
      <p>
        <em>&ldquo;Tr33Haus will act as a social network catering to the specific needs and micro-political community structure of the Trans community.&rdquo;</em>
      </p>
      <a>Login with Facebook</a>
      <a>Create an Account</a>
      <?php echo helloIam ?>
    </div>
    <div id="footer_wrapper" class="gray">
      <div id="footer" class="center">
        <a href="https://github.com/gatodo/TreeHouses">GitHub</a>
        <a>About</a>
      </div>
    </div>
  </div>
</body>
</html>
