<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>My Resume</title>
</head>

<body>

 <?php
     $firstName = "Ralph Gabriel C.";
     $lastName = "Ituriaga";
     $email = "ituriagaralph@gmail.com";
     $contact = "09126672939";
     $skills = array("Programming Languages" => "Python, Java, C++", "Web Development" => "HTML, CSS, JavaScript", "Database Management" => "MySQL, MongoDB");
     $education = array("Bachelor of Science in Information Technology" => "FEU Institute of Technology (2020 - Present)", "High School Diploma" => "OLHRS (2016 - 2020)");
     $projects = array("Project 1");
     ?>



    <div class="container1">
        <div class="img1">
            <img src="Profile.jpg" alt="Profile Picture">
        </div>
        <div class="About Me">
            <h2>
                <?php
                echo "Hi! I'm " . $firstName . " " . $lastName . ".";
                ?>
            </h2>

            <P>
                <?php
                echo "<br>He is a student at the FEU Institute of Technology, studying Information Technology. <br>He has a passion for coding and enjoys working on various projects in his free time.";
                ?>
            </P>

            <ul>
                <?php
                echo "<li><strong>Email:</strong> $email</li>";
                echo "<li><strong>Phone:</strong> $contact</li>";
                ?>
            </ul>
        </div>
    </div>

    <div class="container2">
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <?php
                foreach ($skills as $skill => $description) {
                    echo "<li><strong>$skill:</strong> $description</li>";
                }
                ?>
            </ul>
        </div>
        <div class="education">
            <h2>Education</h2>
            <ul>
                <?php
                foreach ($education as $degree => $details) {
                    echo "<li><strong>$degree:</strong> $details</li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="container3">
        <div class="projects">
            <h2>Projects</h2>
        </div>
        <?php
        foreach ($projects as $project) {
            echo "<img src='project1.png' alt='$project'>";
        }
        ?>
    </div>
</body>

</html>