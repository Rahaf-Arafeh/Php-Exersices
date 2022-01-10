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
$name="rahaf arafeh";
$name2="AYA";
echo "Q1";
echo "<br/>";
echo "a.".' '.strtoupper($name);
echo "<br/>";
echo "b.".' '.strtolower($name2);
echo "<br/>";
echo "c.".' '.ucfirst($name);
echo "<br/>";
echo "d.".' '.ucwords($name);
echo "<hr/>";
// Question Two
echo "Q2";
echo "<br/>";
$date=strtotime("085119"); 
echo date('H:i:s',$date);
echo "<hr/>";
// Question Three
echo "Q3";
echo "<br/>";
$string="I am full-stack developer at Orange Coding Academy";
$word="Orange";
if(strpos($string, $word) !==false){
    echo "Word Found";
}
else{
    echo "Word Not Found";
}
echo "<br/>";
echo "<hr/>";
// Question Four
echo "Q4";
echo "<br/>";
$url="www.orange.com/index.php";
$extract_file=substr($url, strpos($url, '/')+ strlen("/"));
echo $extract_file;
echo "<br/>";
echo "<hr/>";
// Question Five
echo "Q5";
echo "<br/>";
$email="rahaf@gmail.com";
$extract_user=substr($email,0,strpos($email, '@'));
echo $extract_user;
echo "<br/>";
echo "<hr/>";
// Question Six
echo "Q6";
echo "<br/>";
$last="info@gmail.com";
$extract_last=substr($last,-3);
echo $extract_last;
echo "<br/>";
echo "<hr/>";
// Question Seven
echo "Q7";
echo "<br/>";
function password_generate($n) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $n);
}
  echo password_generate(9)."\n";
echo "<br/>";
echo "<hr/>";
// Question Eight
echo "Q8";
echo "<br/>";
$full_string="that trainee is so genius";
$replacement_word="our";
echo str_replace ( "that",$replacement_word,$full_string);
echo "<br/>";
echo "<hr/>";
// Question Nine
echo "Q9";
echo "<br/>";
$str1="dragonball";
$str2="dragonboll";
 echo strcmp($str1,$str2);
 echo "<br/>";
echo "<hr/>";
// Question Ten
echo "Q10";
echo "<br/>";
$arr=[1,2,4,5];
$arr[1]="twinkle";
$arr[2]="twinkle";
$arr[3]="little star";
var_dump($arr);
echo "<br/>";
echo "<hr/>";
// Question Elven
echo "Q11";
echo "<br/>";
$input_letter = 'a';
echo ++$input_letter; // prints 'b'
echo "<br/>";
echo "<hr/>";
// Question Tweleve
echo "Q12";
echo "<br/>";
$parent_string="The brown fox";
$child_string="quick";
echo substr_replace($parent_string, $child_string, 4, 0);
echo "<br/>";
echo implode(' ', array_slice(str_word_count($parent_string,1), 0, 1));
echo "<br/>";
echo "<hr/>";
// Question Thirteen
echo "Q13";
echo "<br/>";
$num="00007898";
echo str_replace ( "0",null,$num);
echo "<br/>";
echo "<hr/>";
// Question Fourteen
echo "Q14";
echo "<br/>";
$remove_fox="the quick brown fox jump above the lazy dog";
echo str_replace ( "fox",null,$remove_fox);
echo "<br/>";
echo "<hr/>";
// Question Fifteen
echo "Q15";
echo "<br/>";
$remove_dash="the quick brown fox jump above the lazy dog---";
echo str_replace ( "-",null,$remove_dash);
echo "<br/>";
echo "<hr/>";
// Question sixteen
echo "Q16";
echo "<br/>";
$str_with_special="<123,;]>55";
echo str_replace(array("]", '"',
',' , ';', '<', '>' ), ' ',$str_with_special);
echo "<br/>";
echo "<hr/>";
// Question seventeen
echo "Q17";
echo "<br/>";
$pick_five="the quick brown fox jump above the lazy dog";
echo implode(' ', array_slice(str_word_count($pick_five,1), 0, 5));
echo "<br/>";
echo "<hr/>";
// Question eighteen
echo "Q18";
echo "<br/>";
$num_comma="1,2,3,4";
echo str_replace(",",null,$num_comma);
echo "<br/>";
echo "<hr/>";
// Question ninteen
echo "Q19";
echo "<br/>";
$alphabet=range('a','z');
foreach($alphabet as $letter){
    echo $letter;
}



?>
</body>
</html>

