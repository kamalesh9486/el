<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body {
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Default font for consistency */
            background-image: url('nn.png'); /* Set background image */
            background-size: cover; /* Cover the whole background */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center; /* Center the background image */
            display: flex; /* Use flexbox to center content */
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            height: 100vh; /* Full viewport height */
        }

        h1 {
            text-align: center;
            color:"black" ; /* Ensure it stands out against the background */
        }

        form {
            max-width: 500px;
            height: 105%;
            width: 50%; /* Ensure the form takes up full width within the max-width */
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Add some transparency */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            margin-top: 10px; /* Add margin top */
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff; /* Add background color for consistency */
        }

        input[type="file"] {
            margin-top: 20px; /* Add margin below the file input */
        }

        input[type="submit"] {
            background-color: #4b06cc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #4562a0;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
        <h1>Student Information Form</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="registerNumber">Register Number:</label>
        <input type="text" id="registerNumber" name="registerNumber" required><br>

        <label for="course">Course Name:</label>
        <input type="text" id="cname" name="cname" required><br><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>

        <label for="idCard">Upload ID Card:</label>
        <input type="file" id="idCard" name="idCard" accept="image/*" required><br><br>

        <label for="grievance">Grievance:</label>
        <select id="grievance" name="grievance" required>
            <option value="Select"> </option>
            <option value="Course Completion Certificate">Course Completion Certificate</option>
            <option value="Result">Result</option>
            <option value="Current Mark Statement">Current Mark Statement</option>
            <option value="Consolidated Mark Statement">Consolidated Mark Statement</option>
            <option value="Provisional Certificate">Provisional Certificate</option>
            <option value="Genuine Certificate">Genuine Certificate</option>
            <option value="PSTM">PSTM</option>
        </select><br><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
