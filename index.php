<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Employees</title>
		<link
			href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,400"
			rel="stylesheet"
			type="text/css"
		/>
		<link rel="stylesheet" type="text/css" href="./css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link
			type="text/css"
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css"
		/>
		<link
			type="text/css"
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css"
		/>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"
		></script>
		<script src="./js/index.js" defer></script>
	</head>
</html>
<body>
	<?php require_once("./assets/header.html"); ?>
	<main class="container align-middle">
       <div class="container">
            <h3 class="mb-4">Please Log in</h3>
            <form action="./src/library/loginController.php" method="POST" class="form">
                <div>
                    <input name="email" type="email" id="email" placeholder="Email"></input>
                </div>
                <div>
                    <input name="pass" type="password" id="password" placeholder="Password">
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