<?php
//-----Q1
// $nums=range(1,10);
// $str='';
// $numsCount=count($nums);

// foreach ($nums as $num) {
//     if ($nums[$numsCount-1]==$num){
//     echo ($num);
// }
// else{
//     echo ($num.'-');

// }
// }

//------Q2
// $count=0;
// $initial=0;
// while($initial<=30){
//     $count+=$initial;
//     $initial++;
// }
// echo $count;

//------Q3 c
// $alp=range('A','Z');
// for ($i=0;$i<=4;$i++) { 
//     for ($j=4-$i;$j>=1;$j--) { 
//         echo("A \t");
//     }
//     echo($alp[$i]."\t");
//     for ($m=0; $m <$i ; $m++) { 
//         echo($alp[$i]."\t");
//     }

//     echo("<br/>");
// }
//------Q3b
// $alp=range(1,10);
// for ($i=0;$i<=4;$i++) { 
//     for ($j=4-$i;$j>=1;$j--) { 
//         echo("1 \t");
//     }
//     echo($alp[$i]."\t");
//     for ($m=0; $m <$i ; $m++) { 
//         echo($alp[$i]."\t");
//     }

//     echo("<br/>");
// }
//------Q4

// for($i=1;$i<=5;$i++){  
//     for($m=1; $m<=5; $m++){  
//         echo((!($i==$m))?0:$i);
//     }  
//     echo "<br>";  
// }   
//------Q5

// function factorial($num){
//     if($num<=0){
//         echo 1;
//     }
//     $f=1;
//     while($num>=1){
//         $f*=$num;
//         $num--;
//     }
//     echo $f;
// }
// factorial(3);


//--------Q6
// $num = 0;  
// $n1 = 0;  
// $n2 = 1;  
// while ($num < 10 )  
// {  
//     $n3 = $n2 + $n1;  
//     echo $n3.' ';  
//     $n1 = $n2;  
//     $n2 = $n3;  
//     $num = $num + 1;
//  }

//--------Q7
// $str="OrangeAcademy";
// echo substr_count($str,'c');

?>


<!-- <html>

<head>

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php
// --------Q8

echo "<table border='1'>";
for ($i=1; $i<=6 ; $i++) { 
    
    echo('<tr>');
        for ($j=1; $j <=5 ; $j++) { 
            $m=$i*$j;
            echo("<td>".$i."*".$j."=".$m."</td>");
        }    
    echo('</tr>');
}

echo "</table>";
?>

</body>

</html> -->

<!-- 
//--------Q9

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
<?php
for($row=1;$row<=8;$row++)
{
	echo "<tr>";
	for($column=1;$column<=8;$column++)
	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td height=30px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
?>
</table> -->

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

<?php

// for($row=1;$row<=10;$row++)
// {
//     echo "<tr>";
    
// 	for($column=1;$column<=10;$column++)
// 	{
//         $m=$row*$column;
// 			echo "<td height=30px width=30px style='text-align:center;' >$m</td>";
		
		
// 	}
// 	echo "</tr>";
// }
?>
</table>
<hr>
<br>

<?php 
//--------Q11
// echo "<pre>";
// for ($row = 0; $row <= 10; $row++) {
//     for ($column = 0; $column <= 10; $column++) {
//         if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
//             echo "*";
//         } else {
//             echo "&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// echo "</pre>";
//--------Q12
// $n = 5; 
// echo "n = " . $n . "\n";
// $count = 1;
// for ($i = $n; $i > 0; $i--) 
// {
//   for ($j = $i; $j < $n + 1; $j++) 
//    {
//      printf("%4s", $count);
//      $count++;
//    } 
// 	echo "\n";
//    }

//--------Q13
// echo "<pre>";
// for ($row = 0; $row < 11; $row++) {
//     for ($col = 0; $col <= 11; $col++) {
//         if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
//             echo "*";
//         } else {
//             echo "&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// echo "</pre>";

//--------Q14


// echo "<pre>";
// for ($row = 0; $row < 11; $row++) {
//     for ($col = 0; $col <= 11; $col++) {
//         if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
//             echo "*";
//         } else {
//             echo "&nbsp;";
//         }
//     }
//     echo "<br>";
// }
// echo "</pre>";

//--------Q15



// for ($row=0; $row<7; $row++)
// {
//   for ($column=0; $column<=7; $column++)
// 	{
//      if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
//             echo "*";    
//         else  
//             echo " ";     
// 	}        
//   echo "\n";
// }




//--------Q16
// $alp=range('A','Z');
// echo "<pre>";
// for ($i = 1; $i < 3; $i++) {
//     for ($j = $i; $j < 3; $j++)
//         echo "&nbsp;&nbsp;";
//     for ($j = 2 * $i - 1; $j > 0; $j--)
//         echo ("&nbsp;".$alp[$j-1]);
//     echo "<br>";
// }
// $n = 3;
// for ($i = 3; $i > 0; $i--) {
//     for ($j = $n - $i; $j > 0; $j--)
//         echo "&nbsp;&nbsp;";
//     for ($j = 2 * $i - 1; $j > 0; $j--)
//         echo ("&nbsp;".$alp[$j-1]);
//     echo "<br>";
// }
// echo "</pre>";










?>