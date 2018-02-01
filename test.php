<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
<style type="text/css">
textarea {
	font-family: 'Prompt', sans-serif;
	font-size: 20px;
}
</style>
<?

session_start();

?>
<div>
<form action="testt.php" method="POST">
<textarea rows="4" cols="50" name="g"></textarea> <br>
<input type="radio" name="ch" value="0" checked=""> ก<br>
  <input type="radio" name="ch" value="1"> ข<br>
    <input type="radio" name="ch" value="2"> ค<br>
  <input type="radio" name="ch" value="3"> ง
  <input type="submit" value="Submit">
</form></div>
<?
echo $_SESSION['text'];
?>