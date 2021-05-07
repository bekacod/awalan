<?=

    require_once "koneksi.php";
$sql = "SELECT iduser, username, email FROM tugas";
$result = $koneksi->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
                Bootstrap
            </a>
        </div>
    </nav>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <form class="d-flex">
                    <a href="tambah.php" class="btn btn-primary active" role="button" aria-pressed="true">TAMBAH</a>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="row">
            <?php if ($result->num_rows > 0) { ?>
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <th>nomor id</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["iduser"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>";
                        echo ' <a href="edit.php?id=' . $row["iduser"] . '" class="btn btn-primary">edit</a>';
                        echo '<a href="hapus.php?id=' . $row["iduser"] . '" class="btn btn-danger">delete</a>
                        </td>
                        </tr>';
                    }
                } else {
                    echo "0 results";
                }
                    ?>

                    </tbody>
                </table>
        </div>
    </div>
</body>

</html>