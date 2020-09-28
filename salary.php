<html>

<head>
    <title>Wage Calculator</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen flex-col justify-center items-center">
        <h1 class="text-center text-2xl font-bold mb-6 -m-32">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">Dear <?php echo $_POST["name"]; ?>, based on information provided:<br></span></h1>

                <body>

<?php

$hoursPerDay = $_POST["hoursPerDay"];
$hourlyRate = $_POST["hourlyRate"];
$daysWorked = $_POST["daysWorked"];
$dailyTravelExpense = $_POST["dailyTravelExpense"];
$dailyLunchExpense = $_POST["dailyLunchExpense"];
$weeklyWages = ($hourlyRate * $hoursPerDay) * $daysWorked - ($dailyTravelExpense * $daysWorked) - ($dailyLunchExpense * $daysWorked);
$monthlyWages = $weeklyWages * 4.28;

echo "<p> Hourly Rate: $" . $hourlyRate . "</p>";
echo "<p> Hours: " . $hoursPerDay . "</p>";
echo "<p> Days Worked: " . $daysWorked . "</p>";
echo "<p> Daily Travel Expense: $" . $dailyTravelExpense . "</p>";
echo "<p> Daily Lunch Expense: $" . $dailyLunchExpense . "</p>";
echo "<p> Weekly Wages: $" . $weeklyWages . "</p>";
echo "<p> Monthly Wages: $" . $monthlyWages . "</p>";

?>

<a class="mt-6 bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500" href="/">Click here to calculate again</a>
</body>
    </div>
</body>
</html>