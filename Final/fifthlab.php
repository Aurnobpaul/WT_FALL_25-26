<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
    <style>
    
    h2{
        text-align:center;
    }
  .name{
        border: 1px solid black;
        padding:10px;
    }
  .email{
        border: 1px solid black;
        padding:10px;
    }
  .DOB{
        border: 1px solid black;
        padding:10px;
    }
  .Gender{
        border: 1px solid black;
        padding:10px;
    }
  .Skills{
        border: 1px solid black;
        padding:10px;
    }
    .degree{
        border: 1px solid black;
        padding:10px;
    }

    </style>
  
</head>
<body>

<h2>Registration Form</h2>

<?php

$name = $email = "";
$nameError = $emailError = $dobError = $genderError = $skillError = $degreeError = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // NAME
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
    if(!$nameError){
        
    }

    // EMAIL
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }
    if(!$emailError){
        
    }

    $dd = $_POST["dd"] ?? "";
    $mm = $_POST["mm"] ?? "";
    $yy = $_POST["yy"] ?? "";
   // DATE OF BIRTH 
    if ($dd === "" || $mm === "" || $yy === "") {
        $dobError = "Date cannot be empty";
    }
    elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998) {
        $dobError = "Invalid date range";
    }

    // GENDER 
    if (!isset($_POST["gender"])) {
        $genderError = "Select at least one gender";
    }

    //SKILLS
    if (!isset($_POST["skills"]) || count($_POST["skills"]) < 2) {
        $skillError = "Select at least two skills";
    }
    //DEGREE
    if (empty($_POST["degree"])) {
        $degreeError = "Degree must be selected";
    }
}


?>
<form method="post" action="">
<div class="name">
Name:
<input type="text" name="name" value="">
<span><?php echo $nameError; ?></span><br>

<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div><br><br>

<div class="email">
Email:
<input type="text" name="email"value="">
<span><?php echo $emailError; ?></span><br>

<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div><br><br>

<div class="DOB">
Date of Birth:<br><br>
DD <input type="number" name="dd" value="<?php echo $dd; ?>" style="width:60px;">
MM <input type="number" name="mm" value="<?php echo $mm; ?>" style="width:60px;">
YYYY <input type="number" name="yy" value="<?php echo $yy; ?>" style="width:80px;">
<span><?php echo $dobError; ?></span><br>

<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div><br><br>

<div class="Gender">
Gender:<br><br>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<span><?php echo $genderError; ?></span><br>

<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div><br><br>

<div class="Skills">
Degree:<br><br>
<input type="checkbox" name="skills[]" value="C"> C
<input type="checkbox" name="skills[]" value="Java"> Java
<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="Python"> Python
<span><?php echo $skillError; ?></span><br>

<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div><br><br>

<div class="degree">
Blood Group:
<select name="degree">
    <option value="">Select</option>
    <option value="A+">SSC</option>
    <option value="B+">SSC</option>
    <option value="AB+">HSC</option>
    <option value="O+">BSc</option>
     <option value="A-">SSC</option>
    <option value="B-">SSC</option>
    <option value="AB-">HSC</option>
    <option value="O-">BSc</option>
</select>
<span><?php echo $degreeError; ?></span><br>
<span><?php echo $degreeError; ?></span><br>
<input type="submit" value="Submit">
</div>

</form>

</body>
</html>