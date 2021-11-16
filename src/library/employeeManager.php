<?php
// /**
//  * EMPLOYEE FUNCTIONS LIBRARY
//  *
//  * @author: Jose Manuel Orts
//  * @date: 11/06/2020
//  */

function addEmployee(array $newEmployee) {
// TODO implement it
}

function deleteEmployee($id) {
	$employeesArray = json_decode(file_get_contents("../../resources/employees.json"), true);
	$newArray = array();

	foreach($employeesArray as $index => $employee) {
		if($employee["id"] === $id) {
			unset($employeesArray[$index]);
		} else {
			array_push($newArray, $employee);
		}
	}
	file_put_contents("../../resources/employees.json", json_encode($newArray));
}


function updateEmployee(array $updateEmployee) {
// TODO implement it
	echo file_get_contents('../../resources/employees.json');
}


// function getEmployee($id) {
// 	$json = json_decode(getEmployeesData(), true);
	
// 	foreach($json as $employee) {
// 		 if($employee["id"] == $id) {
			
// 			header("Location: ../employee.php?id=$id");
// 		 }
		
// 	}
// }


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}

function getEmployeesData() {
	$dataEmployees = file_get_contents('../../resources/employees.json');

	return $dataEmployees;
}
