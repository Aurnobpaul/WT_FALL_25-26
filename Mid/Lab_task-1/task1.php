<!DOCTYPE html>
<html lang="en">
<head>
    <title>AIUB COURSE REGISTRATION</title>
</head>
<body>
    <center>
        <h1> AIUB MANAGEMENT </h1>
        <h2>Course Registration Form</h2>
    </center>

    <hr><br>
    <form>

        <!-- Student Basic Information -->
        <label>Student ID No:</label>
        <input type="text" placeholder=" " required><br><br>

        <label>Name:</label>
        <input type="text" placeholder=" " required><br><br>

        <label>Program / Major:</label><br>
        <input type="radio" name="prg"> Arch
        <input type="radio" name="prg"> BSc in CSE
        <input type="radio" name="prg"> BBA
        <input type="radio" name="prg"> Pharmacy
        <br><br>

        <label>Semester & Academic Year:</label>
        <select required>
          <option>Select Semester</option>
          <option>Fall 2025-2026</option>
          <option>Spring 2025-2026</option>
          <option>Summer 2025-2026</option>
        </select><br><br>

        <!-- Personal Info -->
        <label>Date of Birth:</label>
        <input type="date" required>

        <label>Age:</label>
        <input type="number" min="16" max="80"><br><br>

        <label>Email:</label>
        <input type="email" placeholder="example@gmail.com" required><br><br>

        <label>Phone Number:</label>
        <input type="text" placeholder=" " required><br><br>

        <!-- Academic Status -->
        <label>Academic Standing:</label>
        <select>
            <option>Regular</option>
            <option>Probation</option>
        </select><br><br>

        <label>Internship/Thesis Status:</label>
        <select>
            <option>Not Applicable</option>
            <option>Currently Doing</option>
            <option>Planning Next Semester</option>
        </select><br><br>

        <!-- Courses -->
<h3>Courses to Register:</h3>

<label>Course 1:</label>
<select required>
    <option>Select Course</option>
    <option value="CSE1101">CSE1101 - Introduction to Programming</option>
    <option value="CSE1102">CSE1102 - Programming Lab</option>
    <option value="MAT1101">MAT1101 - Calculus I</option>
    <option value="PHY1101">PHY1101 - Physics I</option>
    <option value="ENG1101">ENG1101 - English Writing Skills</option>
</select>

<label>Section:</label>
<select required>
    <option>Select Section</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
</select>
<br><br>

<label>Course 2:</label>
<select required>
    <option>Select Course</option>
    <option value="CSE1101">CSE1101 - Introduction to Programming</option>
    <option value="CSE1102">CSE1102 - Programming Lab</option>
    <option value="MAT1101">MAT1101 - Calculus I</option>
    <option value="PHY1101">PHY1101 - Physics I</option>
    <option value="ENG1101">ENG1101 - English Writing Skills</option>
</select>

<label>Section:</label>
<select required>
    <option>Select Section</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
</select>
<br><br>

<label>Course 3:</label>
<select required>
    <option>Select Course</option>
    <option value="CSE1101">CSE1101 - Introduction to Programming</option>
    <option value="CSE1102">CSE1102 - Programming Lab</option>
    <option value="MAT1101">MAT1101 - Calculus I</option>
    <option value="PHY1101">PHY1101 - Physics I</option>
    <option value="ENG1101">ENG1101 - English Writing Skills</option>
</select>

<label>Section:</label>
<select required>
    <option>Select Section</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
</select>
<br><br>


        <label>Number of Credits Planned:</label>
        <input type="number" min="1" max="22"><br><br>

        <label>Payment Status:</label>
        <select>
            <option>Pending</option>
            <option>Paid</option>
        </select><br><br>

        <!-- Emergency Contact -->
        <h3>Emergency Contact / Guardian Info</h3>
        <label>Guardian Name:</label>
        <input type="text" placeholder=" "><br><br>

        <label>Guardian Phone:</label>
        <input type="text" placeholder=" "><br><br>

        <!-- Agreement -->
        <input type="checkbox" required>
        I agree to follow all registration rules & deadlines.
        <br><br><br>

        <!-- Submit -->
        <center>
        <button type="submit">Submit</button>
        </center>
    </form>

</body>
</html>
