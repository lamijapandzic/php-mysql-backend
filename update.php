<?php
include "config.php";

$id = $_GET["id"];

if (isset($_POST["update"])) {
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET ime=?, prezime=?, email=? WHERE id=?");
    $stmt->bind_param("sssi", $ime, $prezime, $email, $id);
    $stmt->execute();

    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Edit korisnika</h3>

<form method="POST">
    <input type="text" name="ime" value="<?= $user["ime"] ?>" class="form-control mb-2">
    <input type="text" name="prezime" value="<?= $user["prezime"] ?>" class="form-control mb-2">
    <input type="email" name="email" value="<?= $user["email"] ?>" class="form-control mb-2">
    <button name="update" class="btn btn-success">Sačuvaj</button>
</form>

</body>
</html>