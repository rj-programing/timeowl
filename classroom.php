<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/faculty.css">
  <title>Document</title>
</head>

<body>
  <div id="navbar"></div>

  <div class="over-form">
    <div class="title">
      <p>Add Classroom</p>
    </div>
    <div class="line"></div>
    <form id="facultyForm">
      <div class="class-dt">
        <p>Enter Class Name</p>
        <input type="text" id="sname" placeholder="e.g* A4, B4, etc.." autocomplete="off">
      </div>
      <div class="add-form-btn">
        <button type="button">Add Classroom</button>
      </div>
    </form>
  </div>

  <div class="add-btn">
    <button id="add-faculty-btn"><i class="bi bi-box-fill"></i></i>Add Classroom</button>
  </div>


  <script src="/js/classroom.js"></script>
</body>

</html>