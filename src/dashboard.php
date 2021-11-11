<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php include './module/head.php' ?>

<body>
	<h1>dashboard</h1>
	<a href="../index.php">go to index</a>
	<a href="./employee.php">Go to employee</a>
	<p>Hola: <?php 
	session_start(); 
	echo $_SESSION["name"];
	
?> </p>
</body>
</html>