<!DOCTYPE html>
<html>
<head>
    <title>Participant Registration</title>

    <style>
        body {
            font-family: Arial;
            background-color: #e8f0ff;
            
        }

        h2 {
            text-align: center;
            color: #0b0c0cff;
        }

        .container {
            width: 450px;
            margin: 20px auto;
            background: #fff;
            padding: 35px;
            border-radius: 5px;
            box-shadow: 0px 0px 12px rgba(0,0,0,0.1);
        }

        label {
            font-weight: italic;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #0066cc;
            color: white;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #004c99;
        }

        .success-box {
            background: #ccffd9;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
            border: 2px solid #88dd99;
        }

        .activity-item {
            display: flex;
            justify-content: space-between;
            background: #f7f7f7;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .remove-btn {
            width: auto;
            padding: 5px 10px;
            background: #ff9999;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background: #ff6666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Participant Registration</h2>

        <label>Full Name:</label>
        <input type="text" id="fullName">

        <label>Email:</label>
        <input type="text" id="email">

        <label>Phone Number:</label>
        <input type="text" id="phone">

        <label>Password:</label>
        <input type="password" id="password">

        <label>Confirm Password:</label>
        <input type="password" id="confirmPassword">

        <button onclick="registeredUser()">Register</button>

        <div id="successMessage"></div>
    </div>



    <div class="container">
        <h2>Activity Selection</h2>

        <label>Activity Name:</label>
        <input type="text" id="activityInput">

        <button onclick="addActivity()">Add Activity</button>

        <div id="activityList"></div>
    </div>

<script>
//DOM(accessing elements)
function registerUser() {
    let name = document.getElementById("fullName").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let pass = document.getElementById("password").value.trim();
    let confirmPass = document.getElementById("confirmPassword").value.trim();

    // Validation
    if (!name || !email || !phone || !pass || !confirmPass) {
        alert("All fields must be filled out.");
        return;
    }
    if (!email.includes("@")) {
        alert("Invalid email! Must contain '@'");
        return;
    }
    if (isNaN(phone)) {
        alert("Phone number must contain digits only!");
        return;
    }
    if (pass !== confirmPass) {
        alert("Passwords do not match!");
        return;
    }

    // inner html using successbox
    document.getElementById("successMessage").innerHTML = `
        <div class="success-box">
            <strong>Registration Successful!</strong><br><br>
            Name: ${name}<br>
            Email: ${email}<br>
            Phone: ${phone}
        </div>
    `;
}

// Activity (Add / Remove)

function addActivity() {
    let activityName = document.getElementById("activityInput").value.trim();

    if (activityName === "") {
        alert("Please enter an activity name!");
        return;
    }

    let activityList = document.getElementById("activityList");

    let item = document.createElement("div");
    item.className = "activity-item";

    item.innerHTML = `
        <span>${activityName}</span>
        <button class="remove-btn" onclick="this.parentElement.remove()">Remove</button>
    `;

    activityList.appendChild(item);
    document.getElementById("activityInput").value = "";
}
</script></body></html>
