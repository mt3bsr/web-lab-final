<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM profile");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="navbar">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <button id="themeBtn" onclick="toggleTheme()">Dark Mode</button>
  </div>
  <div id="home">
    <h1><?php echo $row["full_name"]; ?></h1>
    <h3><?php echo $row["job_title"]; ?></h3>
    <p>Welcome to my personal portfolio.</p>
    <a href="#projects" class="btn">View My Projects</a>
    <a href="contact.html" class="btn">Contact Me</a>
  </div>
  <div id="about" class="section">
    <h2>About Me</h2>
    <p><?php echo $row["summary"]; ?></p>
    <p>Location: <?php echo $row["location"]; ?> | Email: <?php echo $row["email"]; ?> | Phone: <?php echo $row["phone"]; ?></p>
    <table>
      <caption>Education</caption>
      <tr><th>University</th><th>Degree</th><th>Graduation</th></tr>
      <tr><td><?php echo $row["university"]; ?></td><td><?php echo $row["degree"]; ?></td><td><?php echo $row["graduation"]; ?></td></tr>
    </table>
  </div>
  <div id="skills" class="section">
    <h2>Skills</h2>
    <table>
      <caption>My Skills</caption>
      <tr><th>Category</th><th>Skills</th></tr>
      <?php
      $result = $conn->query("SELECT * FROM skills");
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["category"] . "</td><td>" . $row["skill_list"] . "</td></tr>";
      }
      ?>
    </table>
  </div>
  <div id="projects" class="section">
    <h2>Projects</h2>
    <?php
    $result = $conn->query("SELECT * FROM projects");
    while ($row = $result->fetch_assoc()) {
      echo "<div class='card'><h3>" . $row["title"] . "</h3><p>" . $row["description"] . "</p><p>Tools: " . $row["tools"] . "</p></div>";
    }
    $conn->close();
    ?>
  </div>
  <div id="footer"><p>&copy; Muteb Salameh Alrashdan</p></div>
  <script src="script.js"></script>
</body>
</html>
