<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/faculty.css">
  <title>Document</title>
</head>
<body>
<?php include 'navbar.php'; ?>

  <div class="over-form">
    <div class="title">
      <p>Add Faculty Details</p>
    </div>
    <div class="line"></div>
    <form id="facultyForm">
      <div class="class-dt">
        <p>Enter Faculty Id</p>
        <input type="text" id="sname" placeholder="e.g* 101, 102, etc..">
      </div>
      <div class="name-part">
        <p>Enter name</p>
        <div class="cn">
          <select id="nm-select">
            <option value="">Dr.</option>
            <option value="">Prof.</option>
          </select>
          <input type="text" id="sname" placeholder="Enter name" autocomplete="off">
        </div>
      </div>
      <div class="tk-subject">
        <p>Enter name of subject</p>
        <input type="text" id="sname" placeholder="e.g* C#, SEO">
      </div>
      <div class="faculty-dt">
        <p>Enter Designation</p>
        <select class="nm-designation">
          <option value="">Professor</option>
          <option value="">Associate Professor</option>
          <option value="">Assistant Professor</option>
        </select>
      </div>
      <div class="num-class-dt">
        <p>Enter Contact No</p>
        <input type="text" id="sname" placeholder="e.g* 1234567890">
      </div>
      <div class="dept-name">
        <p>Enter email-id</p>
        <input type="text" id="sname" placeholder="e.g* demo@gmail.com">
      </div>
      <div class="add-form-btn">
        <button type="button">Add Faculty</button>
      </div>
    </form>
  </div>

  <div class="add-btn">
    <button id="add-faculty-btn"><i class="bi bi-person-plus-fill"></i>Add Faculty</button>
  </div>


  <script src="js/gen.js"></script>
</body>
</html>