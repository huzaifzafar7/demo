<?php





function len($a){ 

	for ($i=0; $a[$i] != "" ; $i++);
	echo $i;
}

	 len("dzrgggzs");









// function upperCase($str)
// {
//     $chars  = str_split($str);
//     $result = '';
    
//     //loop from 0th character to the last character
//     for ($i = 0; $i < count($chars); $i++) {
//         //extracting the character and getting its ASCII value
//         $ch = ord($chars[$i]);
        
//         //if character is a lowercase alphabet then converting 
//         //it into an uppercase alphabet
//         if ($chars[$i] >= 'a' && $chars[$i] <= 'z')
//             $result .= chr($ch - 32);

//           elseif ($chars[$i] >= 'A' && $chars[$i] <= 'Z')
//             $result .= chr($ch + 32);
        
//         else
//             $result .= $chars[$i];
        
//     }
//     //finally, returning the string
//     return $result;
// }

// //function calling
// $text = "hEllo world";
// echo upperCase($text);






/*function upperCase($str)
{
    $chars  = str_split($str);
    $result = '';
    
    //loop from 0th character to the last character
    for ($i = 0; $i < count($chars); $i++) {
        //extracting the character and getting its ASCII value
        $ch = ord($chars[$i]);
        
        //if character is a lowercase alphabet then converting 
        //it into an uppercase alphabet
        if ($chars[$i] >= 'a' && $chars[$i] <= 'z')
            $result .= chr($ch - 32);
        
        else
            $result .= $chars[$i];
        
    }
    //finally, returning the string
    return $result;
}

//function calling
$text = "hello world";
echo upperCase($text);*/





/*function nameandbirth($name, $birth) {
echo "Full Name $name and Birth $birth.<br>";
}

nameandbirth("Hege","1975");
nameandbirth("Hege","1975");
nameandbirth("Hege","1975");
nameandbirth("Hege","1975");*/






/*function fullname($name) {
	echo "$name Test.<br>";
}

fullname("ABC");
fullname("ABC");
fullname("ABC");
fullname("ABC");
*/






/*function test () {
	static $x = 2;
	static $y = 1;

	echo $x." * ".$y;

	$y++;


}

test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";
test();
echo "</br>";


/************************STATCI Variable ************************/

/************************Global Variable Array ************************/

/*$x=5;
$y=10;

function test () {
	$GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
}

test ();
echo $y;*/







/*$x = 5;
$y = 15;

function test() {
	global $x, $y;
	$y= $x+$y;
}

test();

echo $y;*/

/************************Global Variable ************************/


/************************ Local Variable ************************/

/*function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";*/


/************************ Local Variable ************************/


/************************Global Variable ************************/
/*$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
} 

myTest();

echo "<p>Variable x outside function is: $x</p>";

myTest(); 

echo "string"."</br>";

myTest(); 

echo "stringasfasf";*/

/************************Global Variable ************************/

?>