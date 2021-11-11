<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee) {
// TODO implement it
}


function deleteEmployee(string $id) {
	$jsonUrl = '../../resources/employees.json';
	$employeesArray = json_decode(file_get_contents($jsonUrl));

	foreach($employeesArray as $employee) {
		echo $employeesArray;
	}
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id) {
// TODO implement it
}


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
	$jsonUrl = file_get_contents('../../resources/employees.json');
	$employeesArray = json_decode($jsonUrl, true);
	echo json_encode($employeesArray);
}
