<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clinic Patient Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: darkblue;
        }
        h1, h2 {
            text-align: center;
            color: darkblue;
        }
        form {
            width: 500px;
            margin: 0 auto;
            border: 2px solid blue;
            padding: 20px;
            border-radius: 5px;
            background-color: light yellow;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
        input[type="text"],
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 6px;
            border: 1px solid blue;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: darkblue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            
            width: 100%;
        }
        {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <h1>Clinic Patient Registration</h1>
    <form>
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname" ></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phone" required></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Insurance Provider:</td>
                <td><label> </label>
<select required>
    <option>Select poviders</option>
    <option>A</option>
    <option>B</option>
    <option>C</option>
    <option>d</option>
    <option>e</option>
    <option>f</option>
</select></td>
            </tr>
            <tr>
                <td>Insurance Policy Number:</td>
                <td><input type="number" name="insurance" required></td>
            </tr>
        </table>

        <h2>Additional Information</h2>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirmpassword" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>
