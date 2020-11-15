<!DOCTYPE html>
<html>
<?php 
define("NB_COL", 1);
	define("NB_LIG", 5);

$tab=['1','10','7','4', '7'];
 ?>
<head>
	<title>titre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="php.css">

</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 
//menu du site
 menu();
?>

<div>
	
<table>
	<?php 
	for ($j=0; $j<NB_LIG; $j++) {

	echo "<tr>";
	for ($i=0; $i<NB_COL; $i++) {
$index = $i + $j*NB_COL;
$style = "border: 2px solid black";


		 echo '<td style="'.$style.'" >'.$tab[$index].'</td>';
	} 
	

	echo "</tr>";
	highlight_file(__FILE__);
}
?>
</table>

</div>
	




</body>
</html>