<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinzo1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $register_number = $course_name = $mobile = $email = $address = $id_card_filename = $grievance_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching form data
    $name = $_POST['name'];
    $register_number = $_POST['registerNumber'];
    $course_name = $_POST['cname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    //$id_card_filename1=$_POST['idcard'];
    $id_card_filename = $_FILES['idCard']['name'];
    $grievance_type = $_POST['grievance'];

// Move uploaded file to the desired location
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["idCard"]["name"]);
if (move_uploaded_file($_FILES["idCard"]["tmp_name"], $target_file)) {
    // Execute prepared statement
   
    }
 else {
    echo "Error uploading file.";
}

// Close statement and connection
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .con1{
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .con2{
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        label {
            font-weight: bold;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .hidden {
            display: none;
        }

        .file-upload {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="con1">
<h2>Entered Information</h2>
<p>Name: <?php echo htmlspecialchars($name); ?></p>
<p>Register number: <?php echo htmlspecialchars($register_number); ?></p>
<p>Course name: <?php echo htmlspecialchars($course_name); ?></p>
<p>Mobile: <?php echo htmlspecialchars($mobile); ?></p>
<p>Email: <?php echo htmlspecialchars($email); ?></p>
<p>ID card: <?php echo htmlspecialchars($id_card_filename); ?></p>

<p>Address: <?php echo htmlspecialchars($address); ?></p>


<p>Grievance type: <?php echo htmlspecialchars($grievance_type); ?></p>
</div>
<!-- Form to upload additional documents -->

<div class="container">
    <h2>Student Grievances</h2>
    <?php if ($grievance_type): ?>
        <p>Grievance Type: <?php echo htmlspecialchars($grievance_type); ?></p>
    <?php else: ?>
        <p>No grievances found for this student.</p>
    <?php endif; ?>
</div>
<div class="con2">
<form id="uploadForm" action="save_data.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
    <input type="hidden" name="register_number" value="<?php echo htmlspecialchars($register_number); ?>">
    <input type="hidden" name="course_name" value="<?php echo htmlspecialchars($course_name); ?>">
    <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <input type="hidden" name="address" value="<?php echo htmlspecialchars($address); ?>">
    <input type="hidden" name="idcard" value="<?php echo htmlspecialchars($id_card_filename); ?>">
    <input type="hidden" name="grievance_type" value="<?php echo htmlspecialchars($grievance_type); ?>">

    <label for="document1" id="label1">Fees Payment Details:</label>
    <input type="file" name="document1" id="document1" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document2" id="label2">Hall Ticket:</label>
    <input type="file" name="document2" id="document2" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document3" id="label3">Exam Application Form:</label>
    <input type="file" name="document3" id="document3" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document4" id="label4">Available Mark Statement:</label>
    <input type="file" name="document4" id="document4" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document5" id="label5">Consolidated Mark Statement:</label>
    <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document6" id="label6">Course Completion Certificate:</label>
    <input type="file" name="document6" id="document6" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document7" id="label7">Application Fees:</label>
    <input type="file" name="document7" id="document7" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document8" id="label8">Genuine Certificate Fees:</label>
    <input type="file" name="document8" id="document8" accept=".pdf, .doc, .docx" ><br>
    
    <label for="document9" id="label9">PSTM:</label>
    <input type="file" name="document9" id="document9" accept=".pdf, .doc, .docx" ><br>

    <input type="submit" value="Upload and Save Data">
</form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const grievanceType = "<?php echo htmlspecialchars($grievance_type); ?>";
        const labels = [
            document.getElementById('label1'),
            document.getElementById('label2'),
            document.getElementById('label3'),
            document.getElementById('label4'),
            document.getElementById('label5'),
            document.getElementById('label6'),
            document.getElementById('label7'),
            document.getElementById('label8'),
            document.getElementById('label9')
        ];

        function hideAllLabels() {
            labels.forEach(label => {
                if (label) {
                    label.style.display = 'none';
                    const input = label.nextElementSibling;
                    if (input) input.style.display = 'none';
                }
            });
        }

        function showLabels(indices) {
            indices.forEach(index => {
                if (labels[index]) {
                    labels[index].style.display = 'block';
                    const input = labels[index].nextElementSibling;
                    if (input) input.style.display = 'block';
                }
            });
        }

        hideAllLabels();

        switch (grievanceType) {
            case 'Course Completion Certificate':
                showLabels([0]);
                break;
            case 'Result':
                showLabels([0, 1, 2]);
                break;
            case 'Current Mark Statement':
                showLabels([3]);
                break;
            case 'Consolidated Mark Statement':
                showLabels([0, 1, 2]);
                break;
            case 'Provisional Certificate':
                showLabels([5, 4, 2, 0]);
                break;
            case 'Genuine Certificate':
                showLabels([0]);
                break;
            case 'PSTM':
                showLabels([8]);
                break;
            default:
                // No default action
                break;
        }
    });
</script>

</body>
</html>
