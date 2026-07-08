<?php
//1)
// $age=22;
// if($age>18){
//     echo "accepted";
// }
// else
//     echo "rejected";
///////////////////////////////////////
//2)
// function calc($num1,$num2){
//     $multi=$num1*$num2;
//     $diff=$num1-$num2;
//     if($num2!=0)
//         $div=$num1/$num2;
//     else
//         $div=$num2/$num1;

//     echo "muliplication= $multi <br> difference=$diff<br> division=$div";

// }
// calc(10,5);
////////////////////////////////


//3)

// function sumation($arr){
//     $sum=0;
//     for($i=0;$i<count($arr);$i++){
//         $sum+=$arr[$i];
//     }
//     return $sum;
    
// }

// $arr=[10,20,30,40,50];
// echo sumation($arr);

//////////////////////////////////////////

//4)
// $films=array("Fast","Predestination","Persuit","Prestige");
// $keyword="avatar";
// $c=0;
// for($i=0;$i<count($films);$i++){
//     if($keyword==$films[$i]){
//         $c=1;
//         break;
//     }
        
// }
// if($c){
//     echo "Yes";
// }
// else
//     echo "No";


/////////////////////////////////////////////////
//5)

// $arr=[3,5,2,4,1];
// $n=count($arr);
// for($i=0;$i<$n-1;$i++){
//     for($j=0;$j<$n-1-$i;$j++){
//          if ($arr[$j] > $arr[$j + 1]) {

//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;

//             }

//     }
// }


// for($i=0;$i<$n;$i++){
//     echo $arr[$i]." ";
// }


////////////////////////////////////////
//6)

// $arr=[3,8,6,5,9];
// $ma=$arr[0];
// for($i=0;$i<count($arr);$i++){
//     if($arr[$i]>$ma){
//         $ma=$arr[$i];
//     }
// }
// echo $ma;


//////////////////////////////////////
//7)


// $films = array("avatar", "Prestige", "avatar", "Prestige");
// $keyword = "avatar";

// $count = 0;

// for ($i = 0; $i < count($films); $i++) {

//     if ($films[$i] == $keyword) {
//         $count++;
//     }
// }

// echo  $count ;


/////////////////////////////////////////////////
//8)


////////////////////
//9)


// $tests = array(1, "tariq", 1.5, true, 7, 's', false);

// for ($i = 0; $i < count($tests); $i++) {

//     if (is_bool($tests[$i])) {

//         if ($tests[$i] == true) {
//             echo "Yes";
//         } else {
//             echo "No";
//         }

//     } else {
//         echo $tests[$i];
//     }

//     echo "<br>";
// }
//////////////////////////////////////////////
//10)

// $arr=array(6,4,9,3,12,8,7);
// $n=count($arr);
// for($i=0;$i<$n-1;$i++){
//     for($j=$i+1;$j<$n;$j++){
//         if($arr[$j]<$arr[$i]){
//             $temp=$arr[$i];
//             $arr[$i]=$arr[$j];
//             $arr[$j]= $temp;
//         }
//     }
    
    
// }
// for($i=0;$i<$n;$i++){
//     echo $arr[$i]." ";

// }


///////////////////////////////////////////
//11)
$arr1=array('a','b','c','d'); 
$arr2=array('c','d','e','f'); 
$n=count($arr1);
$n2=count($arr2);
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){
        if($arr1[$i]==$arr2[$j]){
            echo $arr1[$i]." ";
        }   
    }
   
}