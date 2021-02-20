<html>
  <head>
    <title>Text Editor</title>
     <link href="style.css" rel="stylesheet" type="text/css" />
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
  <?php $deny = array("111.111.111.111","111.222.333.444");
if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: https://access-denied.webteamone.repl.co/");
   exit();
} ?>
  <?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>
    <?php 
    echo "<h1>Community Project Journal</h1>";
    echo "<p>Write your text below and don't forget to press submit or it will not save:</p>"; 
    if ($_POST) {
  file_put_contents("file.txt",$_POST['text']);
  header ("Location: ".$_SERVER['PHP_SELF']);
  exit;
}
$text = htmlspecialchars(file_get_contents("file.txt"));
    ?> 
    <hr>
  <form method="POST">
<textarea id='text_area' class='text_area' name="text"><?=$text?></textarea>
<input class='submit' type="submit">
</form>

<!--Background-color theme switch-->
<h2>Theme</h2>
<p>Click the button to toggle between dark and light mode for this page:</p>
<label class="switch">
  <input onclick="myFunction()" type="checkbox" checked>
  <span class="slider round"></span>
</label>

<h2>Text Themes</h2>
<button class='red' type="button" onclick="red()">Red</button>
<button class='blue' type="button" onclick="blue()">Blue</button>
<button class='green' type="button" onclick="green()">Green</button>
<button class='purple' type="button" onclick="purple()">Purple</button>

<br><br><br><br><br><br><br><br><br><br><br>
  







<script src="script.js"></script>
  </body>
</html>