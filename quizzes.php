<?php
include 'libray/conn.php';
$quizzes = $conn->query("SELECT q.*, l.title AS lesson FROM quizzes q JOIN lessons l ON l.id = q.lesson_id");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Quizzes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h2>Quizzes</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lesson</th>
                <th>Quiz Title</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $quizzes->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['lesson']) ?></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>