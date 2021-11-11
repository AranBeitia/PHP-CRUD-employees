<?php
	include_once('./employeeManager.php');

	if($_SERVER['REQUEST_METHOD'] === 'GET') {
		header("Content-Type: application/json");
		getEmployeesData();
	}
?>