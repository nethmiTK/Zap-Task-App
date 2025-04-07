<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zap Task - Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <h2>Zap These Next! ⚡</h2>
    <ul>
        <?php
        $sql = "SELECT * FROM tasks WHERE status='Pending'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['title']} 
                <a href='mark_complete.php?id={$row['id']}'>✅</a>
                <a href='delete_task.php?id={$row['id']}'>❌</a>
                </li>";
        }
        ?>
    </ul>

    <!-- Video Section -->
    <div class="video-container">
        <video autoplay loop muted>
            <source src="a.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

</body>
</html>
