<?php
include __DIR__ . "/Models/steam.php";
// var_dump($hotels);


include __DIR__ . "/Views/head.php";
?>



<body>
    <main class="container">
        <h1 class="text-center mb-5">Hotel List</h1>
        <table class="table">
        <thead>
            <tr>
                <?php
                foreach ($hotels[0] as $key => $value) {
                    echo "<th class='text-uppercase'>$key</th>";
                }
                ?>
            </tr>
        </thead>
        <?php
        foreach ($hotels as $hotel) {
            echo "<tr>";
            foreach ($hotel as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        ;
        ?>
        </table>

    </main>
</body>

</html>