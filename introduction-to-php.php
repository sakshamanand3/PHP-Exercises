<?php

/*
+---+
| 1 | 
+---+
Print the sentence: Welcome to PHP!
*/

echo "<h1> 1 </h1>";

echo "Welcome ". "to ". "PHP". "! ";


// task separator
echo "<hr style=\"margin 1rem 0\">";




/* 
+---+
| 2 | 
+---+
Print the sentence: PHP stands for "Hypertext Preprocessor"!
*/

echo "<h1> 2 </h1>";

echo 'PHP '. 'stands '. 'for '. '"Hypertext Preprocessor"'. '!';


// task separator
echo "<hr style=\"margin 1rem 0\">";




/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: PHP stands for "Hypertext Preprocessor"!
*/

echo "<h1> 3 </h1>";

echo '<p> PHP stands for "Hypertext Preprocessor"! </p>' ;


// task separator
echo "<hr style=\"margin 1rem 0\">";




/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:
*/


echo "<h1> 4 </h1>";

echo "HTML ". "- ". "for ". "Hypertext ". "Markup ". "Language <br>";
echo "CSS ". "- ". "Stands ". "for ". "Cascading ". "Stylesheet <br>";
echo "JS ". "- ". "Stands ". "for ". "JavaScript <br>";
echo "PHP ". "- ". "Stands ". "for ". "Hypertext ". "Preprocessor <br>";
echo "SQL ". "- ". "Stands ". "for ". "Structural ". "Query ". "Language <br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";




/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - <ul> ... </ul>:
*/


echo "<h1> 5 </h1>";

echo "<ul>
	    <li> HTML Stands for Hypertext Markup Language <br> </li>
	    <li> CSS Stands for Cascading Stylesheet <br> </li>
	    <li> JS Stands for JavaScript <br> </li>
	    <li> PHP Stands for Hypertext Preprocessor <br> </li>
	    <li> SQL Stands for Structural Query Language <br> </li>
    </ul>"

?>

<style type="text/css">
	h1 {
		color: #B6D094;
		font-size: 26px;

	}

	* {
		font-size: 18px;
		list-style: none;
		background-color: #6A2E35;
		color: #E1AA7D;
		font-family: Verdana;
		letter-spacing: 0.4px;
	}



</style>

