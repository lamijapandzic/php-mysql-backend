<?php include "read.php"; ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="bs">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Korisnici</h2>

    <!-- FORMA -->
    <form action="create.php" method="POST" class="card card-body mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="ime" class="form-control" placeholder="Ime" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="prezime" class="form-control" placeholder="Prezime" required>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Dodaj korisnika</button>
    </form>

    <!-- TABELA -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Email</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["ime"] ?></td>
                <td><?= $row["prezime"] ?></td>
                <td><?= $row["email"] ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Da li ste sigurni?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>