<?php

class JosefVarak
{
    
}

?>
<?php //substr
echo substr('abcdef', 1);     // bcdef
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 4);  // abcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f

// Accessing single characters in a string
// can also be achieved using "square brackets"
$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];                 // d
echo $string[strlen($string)-1]; // f

?>
<?php //  substr_replace
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* These two examples replace all of $var with 'bob'. */
echo substr_replace($var, 'bob', 0) . "<br />\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Insert 'bob' right at the beginning of $var. */
echo substr_replace ($var, 'bob', 0, 0) . "<br />\n";

/* These next two replace 'MNRPQR' in $var with 'bob'. */
echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Delete 'MNRPQR' from $var. */
echo substr_replace($var, '', 10, -1) . "<br />\n";
?>
<?php // strtr
echo strtr("baab", "ab", "01"),"\n";

$trans = array("ab" => "01");
echo strtr("baab", $trans);
?>
<?php //strtoupper
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
?>
<?php //strtolower
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>
<?php //strrpos
$foo = "0123456789a123456789b123456789c";

// Looking for '0' from the 0th byte (from the beginning)
var_dump(strrpos($foo, '0', 0));

// Looking for '0' from the 1st byte (after byte "0")
var_dump(strrpos($foo, '0', 1));

// Looking for '7' from the 21th byte (after byte 20)
var_dump(strrpos($foo, '7', 20));

// Looking for '7' from the 29th byte (after byte 28)
var_dump(strrpos($foo, '7', 28));

// Looking for '7' right to left from the 5th byte from the end
var_dump(strrpos($foo, '7', -5));

// Looking for 'c' right to left from the 2nd byte from the end
var_dump(strrpos($foo, 'c', -2));

// Looking for '9c' right to left from the 2nd byte from the end
var_dump(strrpos($foo, '9c', -2));
?>
<?php //stripos
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
?>
<?php //strpos
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
?>
<?php //strlen
$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
?>
<?php //explode
$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str, 2));

// negative limit (since PHP 5.1)
print_r(explode('|', $str, -1));
?>
<?php //addcslashes
echo addcslashes('foo[ ]', 'A..z');
// output:  \f\o\o\[ \]
// All upper and lower-case letters will be escaped
// ... but so will the [\]^_`
?>
<?php //addslashes
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);
?>
<?php //trim

$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>

<?php //ucfirst
function josefvarak($str) {
    $tmp = preg_split("//u", $str, 2, PREG_SPLIT_NO_EMPTY);
    return mb_convert_case(
        str_replace("i", "I", $tmp[0]), MB_CASE_TITLE, "UTF-8").
        $tmp[1];
}

$str = "iyilik güzelLIK";
echo ucfirst($str) ."\n";   // Iyilik güzelLIK
echo ucfirst_turkish($str); // Iyilik güzelLIK
?>
<?php //ucwords
$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!
?> 
<?php // nektere funkce, kdyz jsem je zkousel, tak mi nefungovaly?>
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>


