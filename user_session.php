<?php
include_once "library/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sessions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php include "library/head.php"; ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">User Session History</h2>
        <a href="users.php" class="btn btn-secondary mb-3">← Back to Users</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Session Token</th>
                    <th>Login Time</th>
                    <th>Logout Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['user_id']) && is_numeric($_GET['user_id'])) {
                    $user_id = intval($_GET['user_id']);

                    // Use prepared statement for security
                    $stmt = $conn->prepare("SELECT * FROM user_sessions WHERE user_id = ? ORDER BY login_time DESC");
                    $stmt->bind_param("i", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['session_id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['session_token']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['login_time']) . "</td>";
                            echo "<td>" . ($row['logout_time'] ? htmlspecialchars($row['logout_time']) : '<span class=\"text-success\">Active</span>') . "</td>";
                            echo "<td>" . ($row['status'] == 1 ? '<span class=\"badge badge-success\">Active</span>' : '<span class=\"badge badge-danger\">Inactive</span>') . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No sessions found for this user.</td></tr>";
                    }
                    $stmt->close();
                } else {
                    echo "<tr><td colspan='6' class='text-center text-danger'>Invalid request. User ID not provided or invalid.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>