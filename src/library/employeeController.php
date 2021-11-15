<?php
	include_once('./employeeManager.php');

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET': // loadData
			header("Content-Type: application/json");
			echo getEmployeesData();
			break;
		case 'POST': // insertItem
			header("Content-Type: application/json");
			getEmployeesData();
			break;

		case 'PUT': // updateItem
			header("Content-Type: application/json");
			getEmployeesData();
			break;

		case 'DELETE': // deleteItem
			parse_str(file_get_contents("php://input"), $put_vars);
			if(isset($put_vars['itemId'])) {
				deleteEmployee($put_vars['itemId']);
			}
			break;
	}
?>