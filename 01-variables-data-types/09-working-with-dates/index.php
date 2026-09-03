<?php
$output = null;

// Get Year
$output = date('Y');

// Get year from timestamp
$output = date('Y', 936345600);

// Get timestamp from strtotime
$output = date('Y', strtotime('2020-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('D'); // Thu
$output = date('l'); // get full day like;- Thursday

// Get month, day and year
$output = date('d-m-Y');

// Get hour
$output = date('h');

// Get min
$output = date('i');

// Get sec
$output = date('s');

// Get am/pm
$output = date('a');

$output = date('h:i:s a')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>