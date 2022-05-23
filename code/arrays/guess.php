<html>
<head>
<title> Sayan Mondal 79fe54d7</title>
<title>Guessing Game for Charles Severance</title>
</head>
<body>
@@ -12,9 +13,9 @@
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  }  {
  } else if ( $_GET['guess'] < 72 ) {
    echo("Your guess is too low");
  }  {
  } else if ( $_GET['guess'] > 72 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>

