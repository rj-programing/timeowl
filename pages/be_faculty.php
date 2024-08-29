<?php
// Initialize an empty array for errors
$errors = [];

// Get form data
$facultyId = isset($_POST['facultyId']) ? trim($_POST['facultyId']) : '';
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$semester = isset($_POST['semester']) ? trim($_POST['semester']) : '';
$designation = isset($_POST['designation']) ? trim($_POST['designation']) : '';
$contactNo = isset($_POST['contactNo']) ? trim($_POST['contactNo']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

// Validate Faculty ID
if (!$facultyId || !is_numeric($facultyId)) {
    $errors['facultyId'] = 'Invalid Faculty ID';
}

// Validate Name
if (!$name || strlen($name) < 2) {
    $errors['name'] = 'Name must be at least 2 characters long';
}

// Validate Semester
if (!$semester) {
    $errors['semester'] = 'Please select a semester';
}

// Validate Designation
if (!$designation) {
    $errors['designation'] = 'Please select a designation';
}

// Validate Contact Number
$contactNoPattern = '/^[0-9]{10}$/';
if (!preg_match($contactNoPattern, $contactNo)) {
    $errors['contactNo'] = 'Invalid contact number. Must be 10 digits';
}

// Validate Email
$emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
if (!preg_match($emailPattern, $email)) {
    $errors['email'] = 'Invalid email address';
}

// Output errors to the form
if (!empty($errors)) {
    // Output errors using JavaScript to display on the form
    foreach ($errors as $field => $message) {
        echo "<script>
                document.getElementById('{$field}Error').textContent = '{$message}';
              </script>";
    }
} else {
    // Process form data if no errors (e.g., save to database)
    echo "<script>alert('Form submitted successfully!');</script>";
}
?>
