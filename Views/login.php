<?php
include __DIR__ . "/../Controller/loginController.php";

include __DIR__ . "/./head.php";

?>

<main class="container my-5">

<?php if (isset($errorMessage)) {
     echo "<div class='alert alert-danger text-center'>$errorMessage</div>";
    }
?>
<?php if (isset($_GET["logout"])) {
    echo "<div class='alert alert-success text-center'>Logout effettuato correttamente</div>";
}
?>
<div class="d-flex justify-content-center align-items-center">
    
    
    <form id="loginform" action="login.php" method="POST">
        <!-- <img class="mb-4" src="./images/mobile-logo.png" alt="logo" width="100"> -->
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating mb-4">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
            <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

    </form>
</div>

</main>

</body>
</html>