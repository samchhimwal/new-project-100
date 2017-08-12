<center><head>FIND FACTORIAL OF A NUMBER</head>
<form>
<h1></h1>
<h2></h2>
<h3></h3>
ENTER NUMBER:<input type="text" name="txtname"/>
<h4></h4>

<input type="submit" name="sbt" value="submit"/>
<input type="reset" name="cncl" value="reset"/></center> 
</form>
<?php
$f=1;
if(isset($_GET['sbt']))
{
    $n=$_GET['txtname'];
    if(!$n='int'){
        echo "Please enter correct key";
        exit();
    }
    

for($i=$n;$i>=1;$i--)
{

   $f=$i*$f;


}

 echo 'THE ANSWER:';
echo "Factorial 0f $n is $f";}

?>