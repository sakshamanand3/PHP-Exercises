<?php


/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/


echo "<h1> While-loop to print the numbers 1 to 10 </h1>";

$num = 1;

while ($num <= 10) {
	
	echo $num . " ";
	
	$num++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

echo "<h1> PHP function range </h1>";

$number_range = range(5, 100, 5);
foreach ($number_range as $number) {
	echo $number.", ";
}

echo "<br><br>";



/*

Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/

echo "<h1> Odd or even check </h1>";

 $even = " ";
 $odd = " ";

for ($num = 0; $num <= 100; $num += 5) {

    if ($num % 2 == 0) {
    $even .= $num ."  ";
    }

    else {
    $odd .= $num ." ";

  }

}






echo "<p> $odd </p>";



// task separator
echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/


$food = [
  "poutine", "perogies", "linguini", "doughnut"
];


/*
Use while-loop to print array elements (every food in a new row).
*/
echo '<p> While-Loop to print Array </p>';

$i = 0;
while ($i < sizeof($food)) {
  
  echo $food[$i];
  echo "<br>";
  $i += 1;

}

/*
Use for-loop to print array elements (every food in a new row).
*/

echo '<p> For Loop </p>';


for ($i=0; $i < sizeof($food); $i++) { 

  echo $food[$i];
  echo "<br>";

}


/*
Use foreach-loop to print array elements (every food in a new row).
*/

echo '<p> For-each Loop </p>';


foreach ($food as $i) {
  
  echo $i;
  echo "<br>"; 

}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

echo "<h1> Unordered List </h1>";
	  


echo "<ul>";

for ($i=0; $i < sizeof($food) ; $i++) { 
      echo "<li> $food[$i] </li>";
}

echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+



The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
echo "<h1> Associative Array </h1>";


$food_assoc = [
  "poutine" => [
              "type" => "Appetizer",
              "origin" => "Canada"],
  "perogies" => [
              "type" => "Snack",
              "origin" => "Russia"],
  "linguini" => [
              "type" => "Main Course",
              "origin" => "Italy"],
  "doughnut" => [
              "type" => "Dessert",
              "origin" => "USA"]

  ];



/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

print_r($food_assoc);

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

echo "<p> Information about food </p>";

echo "<ul>";
foreach ($food_assoc as $food_name => $food_type) {

    echo "<li>" . $food_name . "</li>
    <ul>" . "<li>" . $food_type['type'] . "</li>
    <li>" . $food_type['origin'] . "</li>
    </ul>";
}

echo "</ul>";

?>



<style type="text/css">

	h1 {
		color: #6A2E35;
		font-size: 18px;
		padding-top: 50px;

	}

	* {
		font-size: 18px;
		list-style: none;
		background-color: #c7ffeb;
		color: #E1AA7D;
		font-family: Verdana;
		letter-spacing: 0.4px;
	}



</style>
