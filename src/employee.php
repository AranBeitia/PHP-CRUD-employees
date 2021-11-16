<!-- TODO Employee view -->
<?php include '../assets/head.html';
	require_once("./library/sessionHelper.php");
	require_once("./library/employeeManager.php");

	session_start();
	timeExpires();
	
	if($_GET["id"]){
		$idEmployee = $_GET['id'];
  		$employee = getEmployee($idEmployee);
	}

	function getEmployee($id) {
		$json = json_decode(file_get_contents('../resources/employees.json'), true);
		
		foreach($json as $employee) {
			 if($employee["id"] == $id) {
				return $employee;
			 }
			
		}
	}
	
	?>
	<script src="../js/employee.js" defer></script>
<body>
	<h1>employee</h1>
	<a href="./dashboard.php">Go back</a>
	<main class="container">
		<form class="row g-3" action="./library/employeeController.php" method="POST">
			<div class="col-md-6">
    			<label for="name" class="form-label">Name</label>
    			<input type="text" class="form-control" id="name" name="name" value=<?php echo $employee["name"];?>>
  			</div>
  			<div class="col-md-6">
    			<label for="lastName" class="form-label">Last Name</label>
    			<input type="text" class="form-control" id="lastName" name="lastName" value=<?php echo $employee["lastName"];?>>
  			</div>
  			<div class="col-md-6">
    			<label for="email" class="form-label">Email</label>
    			<input type="email" class="form-control" id="email" name="email" value=<?php echo $employee["email"];?>>
  			</div>
  			<div class="col-md-4">
    			<label for="gender" class="form-label">Gender</label>
    			<select id="gender" class="form-select" name="gender" value=<?php echo $employee["gender"];?>>
      				<option <?= $employee["gender"] === "man" ? "selected":"" ?> >Man</option>
      				<option <?= $employee["gender"] === "woman" ? "selected":"" ?>>Woman</option>
    			</select>
  			</div>
  			<div class="col-md-6">
    			<label for="city" class="form-label">City</label>
    			<input type="text" class="form-control" id="city" name="city" value=<?php echo $employee["city"];?>>
  			</div>
  			<div class="col-md-6">
    			<label for="address" class="form-label">Address</label>
    			<input type="text" class="form-control" id="address" name="address" value=<?php echo $employee["streetAddress"];?>>
  			</div>
  			<div class="col-md-6">
    			<label for="state" class="form-label">State</label>
    			<input type="text" class="form-control" id="state" name="state" value=<?php echo $employee["state"];?>>
  			</div>
  			<div class="col-md-2">
    			<label for="zip" class="form-label">Zip</label>
    			<input type="text" class="form-control" id="zip" name="zip" value=<?php echo $employee["postalCode"];?>>
  			</div>
  			<div class="col-12">
    			<button type="submit" class="btn btn-primary">Submit</button>
				<a href="./dashboard.php"><button type="button" class="btn btn-secondary">Back</button></a>
  			</div>
		</form>
	</main>
	<?php require_once("../assets/footer.html"); ?>
</body>
</html>