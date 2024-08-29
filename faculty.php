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
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'pages/be_faculty.php'; // Handle validation
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
        <input type="text" id="sname" name="facultyId" placeholder="e.g* 101, 102, etc.." autocomplete="off" value="<?php echo isset($facultyId) ? htmlspecialchars($facultyId) : ''; ?>">
        <span id="facultyIdError" class="error"><?php echo isset($errors['facultyId']) ? htmlspecialchars($errors['facultyId']) : ''; ?></span>
      </div>
      <div class="name-part">
        <p>Enter name</p>
        <div class="cn">
          <select id="nm-select" name="title">
            <option value="">Dr.</option>
            <option value="">Prof.</option>
          </select>
          <input type="text" id="sname" name="name" placeholder="Enter name" autocomplete="off" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
          <span id="nameError" class="error"><?php echo isset($errors['name']) ? htmlspecialchars($errors['name']) : ''; ?></span>
        </div>
      </div>
      <div class="faculty-dt">
        <p>Select Semester</p>
        <select class="nm-designation" name="semester">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
          <option value="">5</option>
          <option value="">6</option>
        </select>
        <span id="semesterError" class="error"><?php echo isset($errors['semester']) ? htmlspecialchars($errors['semester']) : ''; ?></span>
      </div>
      <div class="faculty-dt">
        <p>Enter Designation</p>
        <select class="nm-designation" name="designation">
          <option value="">Professor</option>
          <option value="">Associate Professor</option>
          <option value="">Assistant Professor</option>
        </select>
        <span id="designationError" class="error"><?php echo isset($errors['designation']) ? htmlspecialchars($errors['designation']) : ''; ?></span>
      </div>
      <div class="num-class-dt">
        <p>Enter Contact No</p>
        <input type="text" id="sname" name="contactNo" placeholder="e.g* 1234567890" autocomplete="off" value="<?php echo isset($contactNo) ? htmlspecialchars($contactNo) : ''; ?>">
        <span id="contactNoError" class="error"><?php echo isset($errors['contactNo']) ? htmlspecialchars($errors['contactNo']) : ''; ?></span>
      </div>
      <div class="dept-name">
        <p>Enter email-id</p>
        <input type="text" id="sname" name="email" placeholder="e.g* demo@gmail.com" autocomplete="off" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
        <span id="emailError" class="error"><?php echo isset($errors['email']) ? htmlspecialchars($errors['email']) : ''; ?></span>
      </div>
      <div class="add-form-btn">
        <button type="submit">Add Faculty</button>
      </div>
    </form>
  </div>

  <div class="add-btn">
    <button id="add-faculty-btn" name="sub"><i class="bi bi-person-plus-fill"></i>Add Faculty</button>
  </div>
  
  <script src="js/faculty.js"></script>

</body>

</html>
