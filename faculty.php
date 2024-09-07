

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/faculty.css">
  <title>Faculty Details</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container">
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($errors)) {
      include 'pages/be_faculty.php'; // Show errors if any
    }
  ?>
</div>

<div class="over-form">
  <div class="title">
    <p>Add Faculty Details</p>
  </div>
  <div class="line"></div>
  <form id="facultyForm" action="faculty.php" method="post">

    <div class="class-dt">
      <p>Enter Faculty Id</p>
      <input type="text" id="facultyId" name="facultyId" placeholder="e.g* 101, 102, etc.." autocomplete="off" value="<?php echo isset($facultyId) ? htmlspecialchars($facultyId) : ''; ?>">
      <span id="facultyIdError" class="error"><?php echo isset($errors['facultyId']) ? htmlspecialchars($errors['facultyId']) : ''; ?></span>
    </div>
    <div class="name-part">
      <p>Enter name</p>
      <div class="cn">
        <select id="nm-select" name="title">
          <option value="Dr." <?php echo (isset($title) && $title == 'Dr.') ? 'selected' : ''; ?>>Dr.</option>
          <option value="Prof." <?php echo (isset($title) && $title == 'Prof.') ? 'selected' : ''; ?>>Prof.</option>
        </select>
        <input type="text" id="facultyName" name="name" placeholder="Enter name" autocomplete="off" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
        <span id="nameError" class="error"><?php echo isset($errors['name']) ? htmlspecialchars($errors['name']) : ''; ?></span>
      </div>
    </div>
    <div class="faculty-dt">
      <p>Select Semester</p>
      <select class="nm-designation" name="semester">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
          <option value="<?php echo $i; ?>" <?php echo (isset($semester) && $semester == $i) ? 'selected' : ''; ?>><?php echo $i; ?></option>
        <?php } ?>
      </select>
      <span id="semesterError" class="error"><?php echo isset($errors['semester']) ? htmlspecialchars($errors['semester']) : ''; ?></span>
    </div>
    <div class="faculty-dt">
      <p>Enter Designation</p>
      <select class="nm-designation" name="designation">
        <option value="Professor" <?php echo (isset($designation) && $designation == 'Professor') ? 'selected' : ''; ?>>Professor</option>
        <option value="Associate Professor" <?php echo (isset($designation) && $designation == 'Associate Professor') ? 'selected' : ''; ?>>Associate Professor</option>
        <option value="Assistant Professor" <?php echo (isset($designation) && $designation == 'Assistant Professor') ? 'selected' : ''; ?>>Assistant Professor</option>
      </select>
      <span id="designationError" class="error"><?php echo isset($errors['designation']) ? htmlspecialchars($errors['designation']) : ''; ?></span>
    </div>
    <div class="num-class-dt">
      <p>Enter Contact No</p>
      <input type="text" id="contactNo" name="contactNo" placeholder="e.g* 1234567890" autocomplete="off" value="<?php echo isset($contactNo) ? htmlspecialchars($contactNo) : ''; ?>">
      <span id="contactNoError" class="error"><?php echo isset($errors['contactNo']) ? htmlspecialchars($errors['contactNo']) : ''; ?></span>
    </div>
    <div class="dept-name">
      <p>Enter email-id</p>
      <input type="email" id="email" name="email" placeholder="e.g* demo@gmail.com" autocomplete="off" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
      <span id="emailError" class="error"><?php echo isset($errors['email']) ? htmlspecialchars($errors['email']) : ''; ?></span>
    </div>
    <div class="add-form-btn">
      <button type="submit" name="sub">Add Faculty</button>
    </div>
  </form>
</div>

<div class="add-btn">
  <button id="add-faculty-btn"><i class="bi bi-person-plus-fill"></i>Add Faculty</button>
</div>

<script src="js/faculty.js"></script>
</body>
</html>
