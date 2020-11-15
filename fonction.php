<?php
function tab1()
{
?>
<table border="1" >
<tr>
<td>ligne1</td>
<td>ligne2</td>
<td>ligne3</td>
</tr>
</table>
<?php

}
?>

<?php
function tab2()
{
?>
    <table border="1" >
    <tr>
    <td>colonne1</td>
    <td>colonne2</td>
    <td>colonne3</td>
    </tr>
    <?php
tab1();
tab1();

}
?>


<?php
function moy($a,$b,$c)
{

   $g = ($a+$b+$c)/3;

return $g;
}

?>

