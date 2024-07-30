<!-- arrays in php -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Arrays in php</title>
 </head>
 <body>
<?php
echo"<h1>Arrays in php</h1>";

$fruits=array("apple","bannna","mango");

// print_r ($fruits);

echo "<pre>";
print_r ($fruits);

// associative array 
$students=array(
   'name'=>'Aman',
   'age'=>34,
   'course'=>'MCA'
);

echo"<br>" .$students['name']."<br>";

print_r ($students);

$student=array(
     "MCA"=>array(
      array(
   'name'=>'Aman',
   'age'=>34,
   'course'=>'MCA'
     ),
     array(
   'name'=>'Ernest',
   'age'=>30,
   'course'=>'MCA'
     )
     ),

     "BCA"=>array(
      array(
   'name'=>'Atul',
   'age'=>34,
   'course'=>'BCA'
     ),
     array(
   'name'=>'Anmol',
   'age'=>30,
   'course'=>'BCA'
     ),
     array(
      'name'=>'karina',
      'age'=>20,
      'course'=>'BCA'
        )
     )
);

print_r ($student);
?>
 </body>
 </html>