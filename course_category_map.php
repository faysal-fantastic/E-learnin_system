<?php
include 'library/conn.php';
$result = $conn->query("SELECT ccm.*, c.name AS course, cat.name AS category 
                        FROM course_category_map ccm
                        JOIN courses c ON c.id = ccm.course_id
                        JOIN course_categories cat ON cat.id = ccm.category_id");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Course-Category Map</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h2>Course-Category Mapping</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['course']) ?></td>
                    <td><?= htmlspecialchars($row['category']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>