<html>
<center>
<head>WHAT DAY IS IT?</head></center>
<h1></h1>
<h3></h3>
<form>
ENTER DAY NUMBER:<input type="text" name="txtname"/> <br />
ENTER AGE:<input type="text" name="textname"/></br>
<input type="submit" name="sbt" value="submit"/>
<input type="reset" name="cncl" value="reset"/>


</form>
</html>
<?php
$i=0;
 
(int)$age=0;

if(isset($_GET['sbt']))
{
    $number=$_GET['txtname'];
    $age=$_GET['textname'];
echo 'THE ANSWER:';
echo '<br/>';
echo '<br/>';

  
  if((int)$age==null){
    echo 'enter your age';
  }
  
  elseif(!$age==null)
  {


    if($number==1)
    {
        $i=1;
        
    }
    elseif($number==2)
    
      {  $i=2;
        
    }
    elseif($number==3)
    {
        $i=3;
    }
    elseif($number==4)
    {
        $i=4;
    }
    elseif($number==5)
    {
        $i=5;
    }
    elseif($number==6)
    {
        $i=6;
    }
    elseif($number==7)
    {
        $i=7;
    }
    switch($i)
    {
        case '1':
        echo "the day is monday";
           break;
        case '2':
        echo "the day is tuesday";
           break;
        case '3':
        echo "the day is wednesday";
           break;
        case '4':
        echo "the day is thrusday";
           break;
        case '5':
        echo "the day is friday";
           break;
         case '6':
         echo "the day is saturday";
           break;
         case '7':
         echo "the day is sunday" ;      
            break;
            default:
          echo 'you are an alien' ;
          break; }}
   }
      ?>
    

        