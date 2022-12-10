<?php

require "dbBroker.php";
require "model/lek.php";
session_start();
if (empty($_SESSION['loggeduser']) || $_SESSION['loggeduser'] == '') {
    header("Location: index.php");
    die();
}

$result = Lek::getAll($link);
if (!$result) {
    echo "Greska kod upita<br>";
    die();
}
if ($result->num_rows == 0) {
    echo "Nema lekova";
    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apoteka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar content -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="home.php">Pocetna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Lekovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proizvodjac.php">Proizvodjac</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apoteke.php">Apoteka</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Izaberi akciju
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dodajLek.php">Dodaj lek</a></li>
                            <li><a class="dropdown-item" href="dodajProizvodjaca.php">Dodaj proizvodjaca</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    
    <div class="container">

        <div style="height: 50px"></div>
        <div >
            <div class="card-body p-4 ">

                <div style="height: 20px">
                <h1 class="fw-bolder position-absolute start-50 translate-middle">
                    Lekovi</h1>
                    <div style="height: 30px"></div>
                <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    
                                    <th scope="col">Lek id</th>
                                    <th scope="col">Naziv leka</th>
                                    <th scope="col">Godina vazenja</th>
                                    <th scope="col">cena</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($red = $result->fetch_array()) {
                                ?>
                                    <tr id="tr-">
                                        <td><?php echo $red["lekID"] ?></td>
                                        <td><?php echo $red["naziv"] ?></td>
                                        <td><?php echo $red["godinaVazenja"] ?></td>
                                        <td><?php echo $red["cena"] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            </table>
                <br /><br /><br />
                <p class="lead mb-0 fw-normal position-absolute start-50 translate-middle" style="text-align: center">
                
                <br /><br />

            </div>
        </div>
    </div>
  
    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>