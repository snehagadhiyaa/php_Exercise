<<<<<<< HEAD
<?php
$students = [
    [
        "StudentName" => "Alina",
        'Percentage' => 90
    ],
    [
        "StudentName" => "zakkiyah",
        'Percentage' => 75
    ],
    [
        "StudentName" => "Arshiya",
        'Percentage' => 55
    ],
    [
        "StudentName" => "Aayat",
        'Percentage' => 70
    ],
    [
        "StudentName" => "Liza",
        'Percentage' => 95
    ]
];
function Grade($Percentage)
{
    if ($Percentage >= 90) {
        return 'A';
    } elseif ($Percentage >= 80) {
        return 'B';
    } elseif ($Percentage >= 70) {
        return 'C';
    } elseif ($Percentage >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

foreach ($students as $student) {
    $grade = Grade($student['Percentage']);
    echo "<br>Hello " . strtoupper($student['StudentName']) .
        ", you got" . $student['Percentage'] . "% and" . $grade . "Grade.";
}

?>
=======

>>>>>>> 6f3ddca2f6655565f501a3192a0548400cd2efc4
