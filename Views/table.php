<?php
include __DIR__ . "/../Models/steam.php";
// var_dump($hotels);
$thTemplate="";
foreach ($hotels[0] as $key => $value) {
    $thTemplate.= "<th class='text-uppercase'>$key</th>";
};


?>

<table class="table table-striped">
    <thead>
        <tr>
            <?= $thTemplate ?>
        </tr>
    </thead>
    <?php
    foreach ($hotels as $hotel) {
        echo "<tr>";
        foreach ($hotel as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    };
    ?>
</table>