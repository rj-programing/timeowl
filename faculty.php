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
    <!-- Card 1 -->
    <div class="card">
      <div class="img-section">
        <img src="assets/male.png" alt="Faculty Image">
      </div>
      <div class="name-sub-area">
        <p>Dr. Owl TimeTable</p>
        <p>Faculty of Science</p>
        <p>Tackling a Subject of: <br><span>SEO</span></p>
        <div class="line"></div>
        <div class="button">
          <button class="view-more-btn">VIEW MORE</button>
        </div>
      </div>
      <!-- Hidden section for more details -->
      <div class="faculty-details">
        <h2>More Details</h2>
        <p>Class: B4, B5, B6</p>
        <p>Total Lecture: 68</p>
        <!-- Additional content can be added here -->
      </div>
    </div>

    <div class="card">
      <div class="img-section">
        <img src="assets/male.png" alt="Faculty Image">
      </div>
      <div class="name-sub-area">
        <p>Dr. Owl TimeTable</p>
        <p>Faculty of Science</p>
        <p>Tackling a Subject of: <br><span>SEO</span></p>
        <div class="line"></div>
        <div class="button">
          <button class="view-more-btn">VIEW MORE</button>
        </div>
      </div>
      <!-- Hidden section for more details -->
      <div class="faculty-details">
        <h2>More Details</h2>
        <p>Class: B4, B5, B6</p>
        <p>Total Lecture: 68</p>
        <!-- Additional content can be added here -->
      </div>
    </div>

    <div class="card">
      <div class="img-section">
        <img src="assets/male.png" alt="Faculty Image">
      </div>
      <div class="name-sub-area">
        <p>Dr. Owl TimeTable</p>
        <p>Faculty of Science</p>
        <p>Tackling a Subject of: <br><span>SEO</span></p>
        <div class="line"></div>
        <div class="button">
          <button class="view-more-btn">VIEW MORE</button>
        </div>
      </div>
      <!-- Hidden section for more details -->
      <div class="faculty-details">
        <h2>More Details</h2>
        <p>Class: B4, B5, B6</p>
        <p>Total Lecture: 68</p>
        <!-- Additional content can be added here -->
      </div>
    </div>

    <!-- Add more cards as needed -->
  </div>

  <div class="over-form">
    <div class="title">
      <p>Add Faculty Details</p>
    </div>
    <div class="line"></div>
    <form id="facultyForm">
      <div class="class-dt">
        <p>Enter Faculty Id</p>
        <input type="text" id="sname" placeholder="e.g* 101, 102, etc.." autocomplete="off">
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
        <p>Enter Designation</p>
        <select class="nm-designation">
          <option value="">Professor</option>
          <option value="">Associate Professor</option>
          <option value="">Assistant Professor</option>
        </select>
      </div>
      <div class="num-class-dt">
        <p>Enter Contact No</p>
        <input type="text" id="sname" placeholder="e.g* 1234567890" autocomplete="off">
      </div>
      <div class="dept-name">
        <p>Enter email-id</p>
        <input type="text" id="sname" placeholder="e.g* demo@gmail.com" autocomplete="off">
      </div>
      <div class="add-form-btn">
        <button type="button">Add Faculty</button>
      </div>
    </form>
  </div>

  <div class="add-btn">
    <button id="add-faculty-btn"><i class="bi bi-person-plus-fill"></i>Add Faculty</button>
  </div>

  <script src="js/faculty.js"></script>

</body>

</html>