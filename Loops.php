<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      // Question One
      echo "Q1";
      echo "<br/>";
      for($i=1;$i<=10;$i++){
          if($i==10){
            echo $i;
          }
          else{

              echo $i."-";
          }
      }
      echo "<br/>";
      echo "<hr/>";
      // Question Two
      echo "Q2";
      echo "<br/>";
      $sum=0;
      for($i=1;$i<=30;$i++){
        if($i==30){
          echo $i;
        }
        else{

            echo $i.",";
        }
        $sum +=$i;
    }
    echo "<br/>";
    echo "Total :"." ".$sum;
    echo "<br/>";
      echo "<hr/>";
      // Question Three
      echo "Q3";
      echo "<br/>";
      $symb=['A','B','C','D','E'];
      for($i=1;$i<count($symb);$i++){
        for($y=0;$y<count($symb);$y++){
              echo $symb[$y];
        }
        echo "<br/>";
        echo $symb[$i];
      }
      echo "<br/>";
      echo "<hr/>";
      // Question Four
      echo "Q4";
      echo "<br/>";
      echo "<br/>";
      echo "<hr/>";
      // Question Five
      echo "Q5";
      echo "<br/>";
      echo "<br/>";
      echo "<hr/>";
      // Question Six
      echo "Q6";
      echo "<br/>";
      $num_f=5;
      $factorial=1;
      for($i=1;$i<=$num_f;$i++){
        $factorial*=$i;
      }
      echo $factorial;
      echo "<br/>";
      echo "<hr/>";
      // Question Seven
      echo "Q7";
      echo "<br/>";
      $num = 0;  
      $n1 = 0;  
      $n2 = 1;  
      echo $n1.' '.$n2.' ';  
     while ($num < 10 )  
     {  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; } 
    echo "<br/>";
      echo "<hr/>";
      // Question Eight
      echo "Q8";
      echo "<br/>";
      $string_to_search="coding academy by orange";
      $split_string=str_split($string_to_search) ;
      $count=0;
      for($i=0;$i<count($split_string);$i++){
          if($split_string[$i]=="c"){
              $count++;
          }
       
      }
      echo $count;
      echo "<br/>";
      echo "<hr/>";
      // Question Nine
      echo "Q9";
      echo "<br/>";
      $cols = 5;
      $rows = 6;
      echo "<table border=\"1\">";

        for ($r =1; $r <= $rows; $r++){

            echo'<tr>';

            for ($c = 1; $c <= $cols; $c++)
                echo '<td>'."$r * $c =" .$c*$r.'</td>';
           echo '</tr>';
        }
        
        echo"</table>";
        echo "<br/>";
        echo "<hr/>";
        // Question Ten
        echo "Q10";
        echo "<br/>";
        $arrn=[];
        for($i=0;$i<=50;$i++){
           $arrn[$i]=$i;
           for($y=1;$y<=count($arrn);$y++){
               if($y % 3==0 || $y % 7==0){
                   // $i="Fizz";
                   $arrn[$y]="Fizz";
                }
                else if($y% 5==0){
                    // $i="Buzz";
                    $arrn[$y]="Buzz";
                }
                else if($y % 3==0 || $y % 7==0 && $y%5==0){
                    //    $i="FizzBuzz";
                    $arrn[$y]="FizzBuzz";
                }
                
            }
            echo $arrn[$i]." ";
        }
        echo"</table>";
        echo "<br/>";
        echo "<hr/>";
        // Question Elven
        echo "Q11";
        echo "<br/>";
        $numf = 1;
        for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        echo $numf . "&nbsp;";
        $numf++;
        if ($j == $i) {
            echo "&nbsp;";
            echo "<br/>";
        }
    }
}
         echo"</table>";
         echo "<br/>";
         echo "<hr/>";
         // Question Twelve
         echo "Q12";
         echo "<br/>";
         $size = 5;
$chr1="A";
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    $chr1="A";
    for($k=1;$k<=$i;$k++){
        echo "$chr1&nbsp;&nbsp;";
        $chr1++;
    }
echo "<br/>";
}

$size = 5;
for($i=1;$i<$size;$i++){
    for($k=1;$k<=$i;$k++){
        echo "&nbsp;&nbsp;";
    }
    $chr1="A";
    for($j=1;$j<=$size-$i;$j++){
        echo"$chr1&nbsp;&nbsp;";
        $chr1++;

        // echo "&nbsp;&nbsp;";
    }
echo "<br/>";
}
        

    ?>
</body>
</html>