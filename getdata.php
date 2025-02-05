<?php
$servername = "localhost";
$username = "root";
$password = "mysql45@2";
$dbname = "techbros";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$date = '2025-02-05';
$sql = "SELECT task, start_time, end_time FROM tasks WHERE date = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $date);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
<?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($task = mysqli_fetch_assoc($result)): ?>
                <ul>
                    <li><?php echo htmlspecialchars($task['task']); ?></li>
                    <li><?php echo htmlspecialchars($task['start_time']); ?></li>
                    <li><?php echo htmlspecialchars($task['end_time']); ?></li>
                </ul>
            <?php endwhile; ?>
<?php else: ?>
    <p>No tasks found for this date.</p>
<?php endif; ?>

</body>
</html>
