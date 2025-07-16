<?php
include_once "library/conn.php";

$id = '';
$name = '';
$email = '';
$role = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $role = $row['role'];
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if ($id) {
        $sql = "UPDATE users SET name='$name', email='$email', role='$role' WHERE id=$id";
    } else {
        $sql = "INSERT INTO users (name, email, role) VALUES ('$name', '$email', '$role')";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: users_list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="container">
    <h2 class="mt-4"><?= $id ? 'Edit User' : 'Add User' ?></h2>
    <form method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?= $name ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?= $email ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Role:</label>
            <select name="role" class="form-control" required>
                <option value="">-- Select Role --</option>
                <option value="admin" <?= $role == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="student" <?= $role == 'student' ? 'selected' : '' ?>>Student</option>
                <option value="teacher" <?= $role == 'teacher' ? 'selected' : '' ?>>Teacher</option>
            </select>
        </div>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
        <a href="users_list.php" class="btn btn-secondary">Back</a>
    </form>
</body>

</html>