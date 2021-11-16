<!-- TODO Application entry point. Login view -->
<?php require_once("./src/library/sessionHelper.php"); 
    $warning = checkSession();
	
?>
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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
</html>
<body>
	<?php require_once("./assets/header.html"); ?>
	<main class="container d-flex align-items-center justify-content-around">
       <div>
            <h3 class="mb-4">Please Log in</h3>
            <form action="./src/library/loginController.php" method="POST" class="form">
				<div class="form-floating mb-3">
  					<input type="email" name="adminEmail" class="form-control" id="email" placeholder="name@example.com" required>
  					<label for="email">Email address</label>
				</div>
                <div class="form-floating">
  					<input name="adminPass" type="password" class="form-control" id="password" placeholder="Password" required>
  					<label for="password">Password</label>
				</div>
                <div>
                    <button type="submit" class="btn-3d">Submit</button>
                </div>
            </form>
        </div>
		<div>
		<?= $warning ? "<div class='alert__msg alert-$warning[type]' role='alert'>$warning[text]</div>" : "" ?>
		<?php if(isset($_GET["logout"])){
			echo "<div class='alert__msg alert-danger'>You have logged out or your session has expired</div>";
		}	?>	
		</div>
    </main>
    <?php require_once("./assets/footer.html"); ?>
</body>
</html>