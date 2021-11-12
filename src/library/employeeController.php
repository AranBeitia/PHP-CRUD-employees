<?php
	include_once('./employeeManager.php');

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET': // loadData
			header("Content-Type: application/json");
			getEmployeesData();
			break;

		case 'POST': // insertItem
			if(isset($_POST['item'])) {
				addEmployee($_POST['item']);
			}
			break;

		case 'PUT': // updateItem
			parse_str(file_get_contents("php://input"), $put_vars);
			if(isset($put_vars['item'])) {
				updateEmployee([1,2,3]);
			}
			break;

		case 'DELETE': // deleteItem
			parse_str(file_get_contents("php://input"), $put_vars);
			if(isset($put_vars['itemId'])) {
				deleteEmployee($put_vars['itemId']);
			}
			break;
	}
?>