<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .form-container {
            width: 750px;
            margin: auto;
            background: #fff;       
            padding: 30px;
            border: 1px solid #000;
        }

        h2 {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header-box {
            background: #000;
            color: #fff;
            padding: 8px 10px;
            margin: 20px 0 15px 0;
            font-weight: bold;
        }

        .input-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .field {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            border: none;
            border-bottom: 1px solid #000;
            padding: 6px;
            outline: none;
            font-size: 14px;
        }

        textarea {
            resize: none;
            border: 1px solid #000;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #000;
            color: #fff;
            border: none;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .submit-btn:hover {
            background: #333;
        }

        .output-box {
            margin-top: 30px;
            padding: 20px;
            border: 2px solid #000;
            background: #f9f9f9;
        }
    </style>
</head>

<body>

<div class="form-container">

    <h2>Student Registration Form</h2>

    <form method="POST" action="">

        <div class="header-box">STUDENT INFORMATION</div>

        <div class="input-row">
            <div class="field">
                <label>Last Name</label>
                <input type="text" name="lname">
            </div>

            <div class="field">
                <label>First Name</label>
                <input type="text" name="fname">
            </div>

            <div class="field">
                <label>Middle Name</label>
                <input type="text" name="mname">
            </div>
        </div>

        <div class="input-row">
            <div class="field">
                <label>Gender</label>
                <input type="text" name="gender" placeholder="Enter Gender">
            </div>

            <div class="field">
                <label>Age</label>
                <input type="number" name="age">
            </div>

            <div class="field">
                <label>Date of Birth</label>
                <input type="text" name="dob" placeholder="MM/DD/YYYY">
            </div>
        </div>

        <div class="header-box">CONTACT INFORMATION</div>

        <div class="input-row">
            <div class="field">
                <label>Email Address</label>
                <input type="text" name="email">
            </div>

            <div class="field">
                <label>Contact Number</label>
                <input type="text" name="contact">
            </div>
        </div>

        <div class="input-row">
            <div class="field">
                <label>Home Address</label>
                <textarea rows="3" name="address"></textarea>
            </div>
        </div>

        <div class="header-box">ACADEMIC DETAILS</div>

        <div class="input-row">
            <div class="field">
                <label>Course Name</label>
                <input type="text" name="course">
            </div>

            <div class="field">
                <label>Year Level</label>
                <input type="text" name="year" placeholder="Enter Year Level">
            </div>
        </div>

        <div class="input-row">
            <div class="field">
                <label>Student Number</label>
                <input type="text" name="student_no">
            </div>

            <div class="field">
                <label>Section</label>
                <input type="text" name="section">
            </div>
        </div>

        <div class="header-box">EMERGENCY CONTACT</div>

        <div class="input-row">
            <div class="field">
                <label>Parent/Guardian Name</label>
                <input type="text" name="guardian">
            </div>

            <div class="field">
                <label>Emergency Contact Number</label>
                <input type="text" name="guardian_contact">
            </div>
        </div>

        <button type="submit" name="register" class="submit-btn">Register Student</button>

    </form>

    <?php
    if (isset($_POST['register'])) {

        $lastName   = $_POST['lname'];
        $firstName  = $_POST['fname'];
        $middleName = $_POST['mname'];
        $age        = $_POST['age'];
        $gender     = $_POST['gender'];
        $course     = $_POST['course'];
        $s_number   = $_POST['student_no'];
        $email      = $_POST['email'];
        $year       = $_POST['year'];
        $contact    = $_POST['contact'];

        $fullname = strtoupper($lastName) . ", " . ucfirst(strtolower($firstName)) . " " . ucfirst(strtolower($middleName));
        $courseFormat = ucwords(strtolower($course));
        $studentID = $s_number;

        echo "<div class='output-box'>";
        echo "<h3>Form Submission</h3>";

        echo "<p><strong>Name:</strong> $fullname</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Student ID:</strong> $studentID</p>";
        echo "<p><strong>Program:</strong> $courseFormat</p>";
        echo "<p><strong>Year Level:</strong> $year</p>";
        echo "<p><strong>Email:</strong> " . strtolower($email) . "</p>";
        echo "<p><strong>Contact:</strong> $contact</p>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>