<!-- TODO Application entry point. Login view -->
<?php require_once("./src/library/sessionHelper.php"); 
    $php = checkSession();
?> 
<?php include './src/module/head.php' ?>
<body>
	<?php require_once("./assets/header.html"); ?>
	<main class="container align-middle">
       <div class="container">
            <h3 class="mb-4">Please Log in</h3>
            <form action="./src/library/loginController.php" method="POST" class="form">
                <div>
                    <input name="email" type="email" id="email" placeholder="Email" required></input>
                </div>
                <div>
                    <input name="pass" type="password" id="password" placeholder="Password" required></input>
                </div>
                <div>
                    <button type="submit" class="btn-3d">Submit</button>
                </div>
                <?= $php ? "<div class='alert__msg alert-$php[type] role='alert'>$php[text]</div>" : "" ?>
            </form>
        </div>
    </main>
    <div>
    </div>
    <?php require_once("./assets/footer.html"); ?>
</body>
</html>