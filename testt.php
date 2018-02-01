<meta charset="utf-8">
<?

session_start();
// unset($_SESSION['text']);
$g = $_POST['g'];
$lines = explode("\n", $g);
$ch = $_POST['ch'];
echo $lines[0]."<br>";
echo $ch."<br>";
$_SESSION['text'].= '{<br>
		"a":"'.$lines[1].'",<br>
		"b":"'.$lines[2].'",<br>
		"c":"'.$lines[3].'",<br>
		"d":"'.$lines[4].'",<br>
		"title":"'.$lines[0].'",<br>
		"answer":'.$ch.'<br>},';

echo $_SESSION['text'];
echo '<script>window.location.href = "https://pirun.ku.ac.th/~b5810450440/lab_js/test.php";</script>';
?>