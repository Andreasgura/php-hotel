<?php
session_start();
// var_dump($_SESSION["userId"]);
if (!isset($_SESSION["userId"])) {
    header("location: ./Views/login.php");
}

include __DIR__ . "/Models/steam.php";

$filteredHotels = $hotels;
if (isset($_GET["parkingFilter"])) {

    $parkingFilter = $_GET["parkingFilter"];
    if ($parkingFilter == "true") {
        $filteredHotels = array_filter($hotels, function ($hotel) {
            return $hotel["parking"] == true;
        });

    } else if ($parkingFilter == "false") {
        $filteredHotels = array_filter($hotels, function ($hotel) {
            return $hotel["parking"] == false;
        });
    }
    ;


} elseif (isset($_GET["voteFilter"])) {
    $voteFilter = $_GET["voteFilter"];
    $filteredHotels = array_filter($filteredHotels, function ($hotel) use ($voteFilter) {
        return $hotel["vote"] >= $voteFilter;
    });
    var_dump($filteredHotels);
}

include __DIR__ . "/Views/head.php";
?>




<main class="container">
    <div class="d-flex justify-content-end mb-2"><a href="./Views/logout.php" class="btn btn-danger">Logout</a></div>
    <h1 class="text-center mb-5">Hotel List</h1>
    <form action="index.php" method="GET" class="d-flex flex-column form-group">
        <select class="form-select mb-5" aria-label="Default select example" name="parkingFilter">
            <option selected value="all">Filtra per</option>
            <option value="true">Hotel con parcheggio</option>
            <option value="false">Hotels senza parcheggio</option>
        </select>
        <label for="voteFilter">Filtra per voto</label>
        <input type="number" min="1" max="5" name="voteFilter" class="mb-2">
        <button type="submit" class="btn btn-primary mb-5">Filtra</button>
    </form>
    <?php include __DIR__ . "/Views/table2.php" ?>
    
</main>
</body>

</html>