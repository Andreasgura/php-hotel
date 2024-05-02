<?php
include __DIR__ ."/Models/steam.php";

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

}

include __DIR__ . "/Views/head.php";
?>



<body>
    <main class="container">
        <h1 class="text-center mb-5">Hotel List</h1>
        <form action="index.php" method="GET">
            <select class="form-select mb-5" aria-label="Default select example" name="parkingFilter">
                <option selected>Filtra per</option>
                <option value="all">Tutti</option>
                <option value="true">Hotel con parcheggio</option>
                <option value="false">Hotels senza parcheggio</option>
            </select>
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>
        <?= include __DIR__ . "/Views/table.php" ?>
    </main>
</body>

</html>