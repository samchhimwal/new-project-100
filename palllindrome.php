<html>
<center><head>PALLINDROME DEMO</head>
<form>
ENTER NUMBER<input type="text" name="txtname"/>
<input type="submit" name="sbt" value="submit"/>
<input type="reset" name="cncl" value="reset"/>

</form>


</center>

</html>
<?php
$x=1;
$y=2;
if(isset($_GET['sbt']))
{
    $num=$_GET['txtname'];
    while($num<100){
        $z=$x+$y;
        echo ($z."<br/>");
        $x=$y;
        $y=$z;}
        
    

echo '<br/>';}

?>