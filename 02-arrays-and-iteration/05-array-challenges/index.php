<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = array_sum($numbers);
echo '<h3>Sum Of An Array: ' . $sum .'</h3>';

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
$colors = ['red', 'green', 'blue'];
array_push($colors, 'purple');
array_push($colors, 'orange');
$colors[1] = 'pink';
array_pop($colors);
echo '<h3>Colors Array ' . implode(", ", $colors) . '</h3>';


/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields
id, job_title, company, contact_email, and contact_phone.
Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/
$jobs = [
    ['id'=>1, 'name'=>'Java Developer', 'company'=>'Java', 'contact-email'=>'java@gmail.com', 'contact-phone'=>'0123456789', 'skills'=>['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']],
    ['id'=>2, 'name'=>'PHP Developer', 'company'=>'PHP', 'contact-email'=>'php@gmail.com', 'contact-phone'=>'0123456798', 'skills'=>['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']],
    ['id'=>3, 'name'=>'C# Developer', 'company'=>'C#', 'contact-email'=>'csharp@gmail.com', 'contact-phone'=>'0123546789', 'skills'=>['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']]
];

array_push($jobs, ['id'=>4, 'name'=>'Python Developer', 'company'=>'Python', 'contact-email'=>'python@gmail.com', 'contact-phone'=>'0132456789', 'skills'=>['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']]);

echo $jobs[1]['name'];
echo "<br>";
echo $jobs[2]['skills'][1];
echo "<br>";
echo '<h3>Job Listings:</h3>';
echo '<p>
    <pre>'
    . print_r($jobs);
    '</pre>
</p>';
