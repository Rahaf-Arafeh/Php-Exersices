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
          $colors=["red","green","white"];
          $paragraph="The memory of that sence for me is like a frame of film forever frozen at that moment:
            $colors[0] carpent,the $colors[1] lawn, the $colors[2] house. ";
            echo $paragraph;
         echo "<br/>";
         echo "<hr/>";
         // Question Two
         echo "Q2";
         echo "<br/>";
         for($i=0;$i<count($colors);$i++){
             echo "<ul>";
              echo "<li>$colors[$i] </li>";
             echo "</ul>";
         }
         echo "<br/>";
         echo "<hr/>";
         // Question Three
         echo "Q3";
         echo "<br/>";
         $cities=['italy'=>'rome','france'=>'parise','germany'=>'berline'];
         foreach($cities as $key=>$element){
             echo " country : $key ,city : $element";
             echo "<br/>";
         }
         echo "<br/>";
         echo "<hr/>";
         // Question Four
         echo "Q4";
         echo "<br/>";
         $colors2=['green','blue','red'];
           echo $colors2[0];
           echo "<br/>";
           echo "<hr/>";
           // Question Five
           echo "Q5";
           echo "<br/>";
           $arrins=[1,2,3,4,5];
           array_splice( $arrins, 4, 0, "$" ); 
           foreach($arrins as $element){
               echo $element." ";
           }
           echo "<br/>";
           echo "<hr/>";
           // Question Six
           echo "Q6";
           echo "<br/>";
           $fruits=array("d"=>"Lemon","a"=>"Orange","b"=>"Banana","c"=>"Apple");
            krsort($fruits);
            foreach($fruits as $key=>$element){
                echo "$key => $element";
                echo "<br/>";
            }
            echo "<br/>";
            echo "<hr/>";
            // Question Seven
            echo "Q7";
            echo "<br/>";
            $tempratures=[78,60,62,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
            $sum=0;
            for($i;$i<count($tempratures);$i++){
                $sum+=$tempratures[$i];

            }
          echo $avg=$sum/count($tempratures);
          echo "<br/>";
          echo max($tempratures);
          echo "<br/>";
          echo min($tempratures);
          echo "<br/>";
          echo "<hr/>";
          // Question Eight
          echo "Q8";
          echo "<br/>";
          $array1=['color'=>'red',2,4];
          $array2=["a","b",'color'=>'green','shape'=>'trapezoid',4];
          $array3=array_merge($array1,$array2);
         foreach($array3 as $key=>$element){
            echo "$key => $element";
            echo "<br/>";
        }
        echo "<br/>";
        echo "<hr/>";
        // Question One
        echo "Q1";
        echo "<br/>";
        $arrayup=['green','blue','green','yellow'];
        function uppercase($arr){
            foreach($arr as $element){
                echo strtoupper($element);
                echo "<br/>";
            }
        }
        uppercase($arrayup);
        echo "<br/>";
        echo "<hr/>";
        // Question Two
        echo "Q2";
        echo "<br/>";
        $arraylc=['GREEN','BLUE','GREEN','YELLOW'];
        function lowercase($arr){
            foreach($arr as $element){
                echo strtolower($element);
                echo "<br/>";
            }
        }
        lowercase($arraylc);
        echo "<br/>";
        echo "<hr/>";
        // Question Nine
        echo "Q9";
        echo "<br/>";
        for($i=200;$i<=250;$i++){
            if($i %4 ==0){
                echo $i;
                echo "<br/>";
            }
        }
        echo "<br/>";
        echo "<hr/>";
        // Question Ten
        echo "Q10";
        echo "<br/>";
        $words=array("abcd","abc","de","hjjj","g","wer");
        $new_array = array_map('strlen', $words);
        echo "the longest array length :"." ".max($new_array)."<br/> "
        ."the shortest array length :"." ".min($new_array);
        echo "<br/>";
        echo "<hr/>";
        // Question Eleven
        echo "Q11";
        echo "<br/>";
        $rand_range=range(11,30);
        foreach($rand_range as $element){
            echo $element." ";
        }
        echo "<br/>";
        echo "<hr/>";
        // Question Tweleve
        echo "Q12";
        echo "<br/>";
        $input=[2,0,10,12,6];
        sort($input);
        $second_lowest=$input[1];
        echo "the second lowest number ="." ".$second_lowest;
         ?>
         
</body>
</html>