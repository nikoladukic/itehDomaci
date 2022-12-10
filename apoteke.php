<?php

session_start();
if (empty($_SESSION['loggeduser']) || $_SESSION['loggeduser'] == '') {
    header("Location: index.php");
    die();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apote</title>
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
                        <a class="nav-link " href="lekovi.php">Lekovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proizvodjac.php">Proizvodjac</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" href="#">Apoteka</a>
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
        <div class="card border border-1 rounded-5 shadow my-5" style="background-color: lightgray">
            <div class="card-body p-4 ">
                <div style="height: 20px"></div>
                <h1 class="fw-bolder position-absolute start-50 translate-middle">
                    Apoteka</h1>
                <div style="height:145px"></div>
                <p class="lead fw-semibold position-absolute start-50 translate-middle " id="tekst"
                    style="text-align: center">
                    Pritiskom na dugme 'Opis', prikazacemo kratak opis o najpravanijem leku danasnjice! <br />
                    Pritiskom na dugme 'Zaposleni' prikazace se lista zaposlenih farmaceuta!</p>
                <div style="height: 120px"></div>
                <div class="form-group position-absolute start-50 translate-middle">
                    <span>

                        <button type="submit" class="btn btn-secondary" id="opis">Opis</button>
                        <button type="submit" id="zaposleni" class="btn btn-secondary">Zaposleni</button>
                        <button onclick="odbrojavanje()" class="btn btn-secondary">Osvezi za 5 sekundi</button>
                    </span>
                </div>
                <br /><br /><br />
                <p class="lead mb-0 fw-normal position-absolute start-50 translate-middle" style="text-align: center">
                    
                <br /><br />
                <div style="height: 30px"></div>
                

                <p class="lead mb-0 fw-normal position-absolute start-50 translate-middle" style="text-align: center">
                
                <br /><br />

            </div>
        </div>
    </div>
  
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="function.js">
</script>
</body>

</html>