<!-- filepath: c:\Users\user\Desktop\luka\web technology\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programchlal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .header {
            text-align: center;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'cv_database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM personal_info WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        <img src="https://www.w3schools.com/w3css/img_la.jpg" alt="LA" style="width:100%">

        <div class="header">
            <h1><?php echo $row['name']; ?></h1>
            <p>Email: <?php echo $row['email']; ?> | Phone: <?php echo $row['phone']; ?></p>
        </div>

        <div class="section">
            <h2>Education</h2>
            <p><?php echo $row['education']; ?></p>
        </div>

        <div class="section">
            <h2>Work Experience</h2>
            <p><?php echo $row['experience']; ?></p>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <p><?php echo $row['skills']; ?></p>
        </div>

        <div class="section">
            <h2>Projects</h2>
            <p><?php echo $row['projects']; ?></p>
        </div>
    <?php
    } else {
        echo "<p>No data found.</p>";
    }

    $conn->close();
    ?>
</body>
</html>