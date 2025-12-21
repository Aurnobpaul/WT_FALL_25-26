<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<?php
// initialize variables
$name = $email = "";
$nameError = $emailError = $dobError = $genderError = $skillError = $degreeError = "";

// safe POST values (IMPORTANT FIX)
$dd = $_POST["dd"] ?? "";
$mm = $_POST["mm"] ?? "";
$yy = $_POST["yy"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* 1. NAME */
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = $_POST["name"];

        if (!preg_match("/^[A-Za-z]/", $name)) {
            $nameError = "Must start with a letter";
        }
        elseif (!preg_match("/^[A-Za-z.\- ]+$/", $name)) {
            $nameError = "Only letters, period and dash allowed";
        }
        elseif (str_word_count($name) < 2) {
            $nameError = "Must contain at least two words";
        }
    }

    /* 2. EMAIL */
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    /* 3. DATE OF BIRTH */
    if ($dd === "" || $mm === "" || $yy === "") {
        $dobError = "Date cannot be empty";
    }
    elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998) {
        $dobError = "Invalid date range";
    }

    /* 4. GENDER */
    if (!isset($_POST["gender"])) {
        $genderError = "Select at least one gender";
    }

    /* 5. SKILLS */
    if (!isset($_POST["skills"]) || count($_POST["skills"]) < 2) {
        $skillError = "Select at least two skills";
    }

    /* 6. DEGREE */
    if (empty($_POST["degree"])) {
        $degreeError = "Degree must be selected";
    }
}
?>

<form method="post">

<!-- NAME -->
Name:
<input type="text" name="name" value="<?php echo $name; ?>">
<span><?php echo $nameError; ?></span><br><br>

<!-- EMAIL -->
Email:
<input type="text" name="email">
<span><?php echo $emailError; ?></span><br><br>

<!-- DOB -->
Date of Birth:
DD <input type="number" name="dd" value="<?php echo $dd; ?>" style="width:60px;">
MM <input type="number" name="mm" value="<?php echo $mm; ?>" style="width:60px;">
YYYY <input type="number" name="yy" value="<?php echo $yy; ?>" style="width:80px;">
<span><?php echo $dobError; ?></span><br><br>

<!-- GENDER -->
Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<span><?php echo $genderError; ?></span><br><br>

<!-- SKILLS -->
Skills:
<input type="checkbox" name="skills[]" value="C"> C
<input type="checkbox" name="skills[]" value="Java"> Java
<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="Python"> Python
<span><?php echo $skillError; ?></span><br><br>

<!-- DEGREE -->
Degree:
<select name="degree">
    <option value="">Select</option>
    <option value="SSC">SSC</option>
    <option value="HSC">HSC</option>
    <option value="BSc">BSc</option>
</select>
<span><?php echo $degreeError; ?></span><br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>
