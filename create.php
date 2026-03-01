<?php
include "config.php";

if (isset($_POST["submit"])) {
    $ime = trim($_POST["ime"]);
    $prezime = trim($_POST["prezime"]);
    $email = trim($_POST["email"]);

    if ($ime != "" && $prezime != "" && $email != "") {
        $stmt = $conn->prepare("INSERT INTO users (ime, prezime, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $ime, $prezime, $email);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: index.php");
}
?>

