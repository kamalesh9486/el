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

// Function to upload a file and return its path
function uploadFile($file_input_name) {
    if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$file_input_name]["name"]);
        
        if (move_uploaded_file($_FILES[$file_input_name]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return null;
        }
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve student data
    $name = $_POST['name']; 
    $register_number = $_POST['register_number'];
    $course_name = $_POST['course_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $id_card_filename=$_POST['idcard'];
    $grievance_type = $_POST['grievance_type'];
    $status="processing";
    // Upload files and get their paths
    $fees_payment_details = uploadFile('document1');
    $hall_ticket = uploadFile('document2');
    $exam_application_form = uploadFile('document3');
    $available_mark_statement = uploadFile('document4');
    $consolidated_mark_statement = uploadFile('document5');
    $course_completion_certificate = uploadFile('document6');
    $application_fees = uploadFile('document7');
    $genuine_certificate_fees = uploadFile('document8');
    $pstm = uploadFile('document9');

    $stmt = $conn->prepare("INSERT INTO grievance_ (name, register_number, course_name, mobile, email, address, id_card_filename, grievance_type, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if prepare() failed
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    if (!$stmt->bind_param("sssssssss", $name, $register_number, $course_name, $mobile, $email, $address, $id_card_filename, $grievance_type, $status)) {
        die('Bind failed: ' . htmlspecialchars($stmt->error));
    }

    // Execute the statement
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }
 
    if ($stmt->execute()) {
        // Get the last inserted ID for the student
        $student_id = $stmt->insert_id;

        // Prepare and bind the SQL statement to insert document data
        $stmt = $conn->prepare("INSERT INTO student_documents (student_id, fees_payment_details, hall_ticket, exam_application_form, available_mark_statement, consolidated_mark_statement, course_completion_certificate, application_fees, genuine_certificate_fees, pstm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssssss", $student_id, $fees_payment_details, $hall_ticket, $exam_application_form, $available_mark_statement, $consolidated_mark_statement, $course_completion_certificate, $application_fees, $genuine_certificate_fees, $pstm);
        
        if ($stmt->execute()) {

            echo "Data and documents uploaded successfully.";
        } else {
            echo "Error uploading documents: " . $stmt->error;
        }
    } else {
        echo "Error inserting student data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
