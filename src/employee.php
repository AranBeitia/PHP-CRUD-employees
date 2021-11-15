<!-- TODO Employee view -->
<?php include '../assets/head.html';
	require_once("./library/sessionHelper.php");
	session_start();
	timeExpires();
	?>
<body>
	<h1>employee</h1>
	<a href="./dashboard.php">Go back</a>
	<?php
		// var_dump(json_decode(file_get_contents("../resources/employees.json")),true);
	?>
	<main class="container">
		<form class="row g-3" action="./library/employeeController.php" method="POST">
			<div class="col-md-6">
    			<label for="name" class="form-label">Name</label>
    			<input type="text" class="form-control" id="name" name="name">
  			</div>
  			<div class="col-md-6">
    			<label for="lastName" class="form-label">Last Name</label>
    			<input type="text" class="form-control" id="lastName" name="lastName">
  			</div>
  			<div class="col-md-6">
    			<label for="email" class="form-label">Email</label>
    			<input type="email" class="form-control" id="email" name="email">
  			</div>
  			<div class="col-md-4">
    			<label for="gender" class="form-label">Gender</label>
    			<select id="gender" class="form-select" name="gender">
      				<option>Man</option>
      				<option>Woman</option>
					<option>No Binary</option>
    			</select>
  			</div>
  			<div class="col-md-6">
    			<label for="city" class="form-label">City</label>
    			<input type="text" class="form-control" id="city" name="city">
  			</div>
  			<div class="col-md-6">
    			<label for="address" class="form-label">Address</label>
    			<input type="text" class="form-control" id="address" name="address">
  			</div>
  			<div class="col-md-6">
    			<label for="state" class="form-label">State</label>
    			<input type="text" class="form-control" id="state" name="state">
  			</div>
  			<div class="col-md-2">
    			<label for="zip" class="form-label">Zip</label>
    			<input type="text" class="form-control" id="zip" name="zip">
  			</div>
  			<div class="col-12">
    			<button type="submit" class="btn btn-primary">Submit</button>
				<a href="./dashboard.php"><button class="btn btn-secondary">Back</button></a>
  			</div>
		</form>
	</main>
	<?php require_once("../assets/footer.html"); ?>
</body>
</html>