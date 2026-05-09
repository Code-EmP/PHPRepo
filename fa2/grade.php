<?php
$name = "Ralph Gabriel C. Ituriaga";
$grade = 80;
$image = "";

switch (true) {
    case ($grade >= 97 && $grade <= 100):
        $ranking = "A+";
        $image = '<img src="A+.png" alt="A+">';
        break;

    case ($grade >= 93 && $grade <= 96):
        $ranking = "A";
        $image = '<img src="A+.png" alt="A+">';
        break;

    case ($grade >= 90 && $grade <= 92):
        $ranking = "A-";
        $image = '<img src="A+.png" alt="A-">';
        break;

    case ($grade >= 87 && $grade <= 89):
        $ranking = "B+";
        $image = '<img src="B+.png" alt="B+">';
        break;

    case ($grade >= 83 && $grade <= 86):
        $ranking = "B";
        $image = '<img src="B+.png" alt="B">';
        break;

    case ($grade >= 80 && $grade <= 82):
        $ranking = "B-";
        $image = '<img src="B+.png" alt="B-">';
        break;

    case ($grade >= 77 && $grade <= 79):
        $ranking = "C+";
        $image = '<img src="C+.png" alt="C+">';
        break;

    case ($grade >= 73 && $grade <= 76):
        $ranking = "C";
        $image = '<img src="C+.png" alt="C">';
        break;

    case ($grade >= 70 && $grade <= 72):
        $ranking = "C-";
        $image = '<img src="C+.png" alt="C-">';
        break;

    case ($grade >= 67 && $grade <= 69):
        $ranking = "D+";
        $image = '<img src="D+.png" alt="D+">';
        break;

    case ($grade >= 63 && $grade <= 66):
        $ranking = "D";
        $image = '<img src="D+.png" alt="D">';
        break;

    case ($grade >= 60 && $grade <= 62):
        $ranking = "D-";
        $image = '<img src="D+.png" alt="D-">';
        break;

    case ($grade < 60):
        $ranking = "F";
        $image = '<img src="F.png" alt="F">';
        break;

    default:
        $ranking = "Invalid Grade";
        $image = '<img src="https://cdn-icons-png.flaticon.com/512/2278/2278992.png" alt="Failed">';
}

echo "Name: $name<br>";
echo "Grade = $grade<br>";
echo "Ranking: $ranking<br>";
echo $image;
?>