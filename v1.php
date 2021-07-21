<?php


$string=[];
$monthsReverse=[];
$i=0;
$i2=0;
$n=0;
$months=['Ian','Feb','Mar','Apr','Mai','Feb','Iun','Iul','Aug','Sep','Oct','Nov','Dec'];
 foreach($months as $month)
 {
 if($month=='Feb') {
    $i++;
    }
 }
  echo $i;



for($i2=0;$i2<20;$i2++)
{
    $string[$i2]=rand(1,20);
}
for($i2=0;$i2<20;$i2++)
{
    if($string[$i2]==3){
        break;}
    else{
echo "   ".$string[$i2];
    }
}
$i3=0;
$n=count($months);

for($i2=$n-1;$i2>=0;$i2--)
{

$monthsReverse[$i3++]=$months[$i2];
echo $monthsReverse[$i3-1];
}

function bubbleSort(string $string):void
{$swapped=false;
    $aux='';
    $n=count($string);
    while($swapped==false)
    {
        $swapped=false;
        for($i=1;$i<=$n-1;$i++)
        {
         if($string[$i-1]>$string[$i]) {
             $aux=$string[i-1];
             $string[$i-1]=$string[$i];
             $string[$i]=$aux;
             $swapped=true;
         }

        }
    }
}

?>
