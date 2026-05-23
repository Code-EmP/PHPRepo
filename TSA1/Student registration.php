<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">
        <?php
        $fname = "Ralph Gabriel";
        $lname = "Ituriaga";
        $age = "20";
        $grade = "Grade 12";
        $school = "Our Lady of the Holy Rosary";
        $gender = "Male";
        $dob = "April 4, 2006";
        $last_attended = "June 30, 2023";
        $medical = "Bronchial Asthma";
        $citizenship = "Filipino";
        ?>

        <h2>Student Registration Form</h2>

        <form method="post" action="">
            <div class="section">
                <h3>Personal Information</h3>

                <label>First Name</label>
                <input type="text" name="fname" value="<?= $fname ?>">

                <label>Last Name</label>
                <input type="text" name="lname" value="<?= $lname ?>">

                <label>Age</label>
                <input type="number" name="age" value="<?= $age ?>">

                <label>Gender</label>
                <input type="text" name="gender" value="<?= $gender ?>">

                <label> Date of Birth </label>
                <input type="text" name="dob" value="<?= $dob ?>">





                <h3>Educational Attainment</h3>

                <label>Last Grade Level Completed</label>
                <input type="text" name="grade" value="<?= $grade ?>">

                <label>Previous School</label>
                <input type="text" name="school" value="<?= $school ?>  ">

                <label>Grade at previous school</label>
                <input type="text" name="grade" value="<?= $grade ?>">

                <label>Last date attended</label>
                <input type="text" name="last_attended" value="<?= $last_attended ?>">




                <h3> Medical Information </h3>

                <label> Medical conditions? </label>
                <input type="text" name="medical_conditions" value="<?= $medical ?>">





                <h3> Citizenship Information </h3>

                <label>Citizenship</label>
                <input type="text" name="citizenship" value="<?= $citizenship ?>">


                <input type="submit" value="Submit">
            </div>
        </form>


    </div>


</body>

</html>