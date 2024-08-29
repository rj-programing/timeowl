<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/faculty.css">
  <title>Document</title>
</head>

<body>
<?php include 'navbar.php'; ?>

  <div class="over-form">
    <div class="title">
      <p>Add Subject Details</p>
    </div>
    <div class="line"></div>
    <form id="facultyForm">
      <div class="class-dt">
        <p>Enter Subject Name</p>
        <input type="text" id="sname" placeholder="e.g* C#, Java, etc.." autocomplete="off">
      </div>
      <div class="tk-subject">
        <p>Enter Subject code</p>
        <input type="text" id="sname" placeholder="e.g* BCAC1202.." autocomplete="off">
      </div>
      <div class="faculty-dt">
        <p>Select CourseType</p>
        <select class="nm-designation">
          <option value="">Theory</option>
          <option value="">Pratical</option>
        </select>
      </div>
      <div class="faculty-dt">
        <p>Select Semester</p>
        <select class="nm-designation">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
          <option value="">5</option>
          <option value="">6</option>
        </select>
      </div>
      <div class="faculty-dt">
        <p>Select Program</p>
        <select class="nm-designation">
          <option value="">B.C.A</option>
          <option value="">BSC.it</option>
        </select>
      </div>
      <div class="add-form-btn">
        <button type="button">Add Subject</button>
      </div>
    </form>
  </div>

  <div class="add-btn">
    <button id="add-faculty-btn"><i class="bi bi-journal-plus"></i>Add Subject</button>
  </div>


  <script src="js/subject.js"></script>
</body>

</html>