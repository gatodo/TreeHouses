<!DOCTYPE html>
<html>
<head>
<title>Login Facebook</title>
</head>

<body>

<div id="fb-root"></div>
<script src="fb_login.js"></script>

<!--
Below we include the Login Button social plugin. This button uses the JavaScript SDK to
present a graphical Login button that triggers the FB.login() function when clicked. -->

Your Facebook id is: <output id="idout" name="id"></output>

<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>


</body>
</html>