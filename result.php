<?php
 
if (isset($_GET['calculate']))
{
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
 

$p=($a+$b+$c)/2;
$s=sqrt($p*($p-$a)*($p-$b)*($p-$c));
 
if (is_numeric($a) and is_numeric($b) and is_numeric($c) and is_numeric($s)) echo "������� ����� $s"; else echo"������ � �������� ������";
echo"<br><a href=\"javascript:history.back()\">�����</a>";
 
}
 
?>
</body>
</html>         
                     
    
