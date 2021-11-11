var employees = (function () {
	var json = null

	$.ajax({
		async: false,
		type: 'GET',
		url: '../src/library/employeeController.php',
		dataType: 'json',

		success: function (data) {
			console.log(data)
			json = data
		},
	})

	return json
})()

$('#jsGrid').jsGrid({
	width: '100%',
	filtering: true,
	editing: false,
	inserting: true,
	sorting: true,
	paging: true,
	autoload: true,
	pageSize: 15,
	pageButtonCount: 5,
	deleteConfirm: 'Do you really want to delete the client?',
	data: employees,

	fields: [
		{ name: 'id', type: 'text', width: 50, validate: 'required' },
		{ name: 'name', type: 'text', width: 100, title: 'Name' },
		{ name: 'email', type: 'text', width: 150, title: 'Email' },
		{ name: 'age', type: 'number', width: 50, title: 'Age' },
		{ name: 'streetAddress', type: 'text', width: 50, title: 'Street No.' },
		{ name: 'city', type: 'text', width: 150, title: 'City' },
		{ name: 'state', type: 'text', width: 50, title: 'Phone State' },
		{
			name: 'postalCode',
			type: 'text',
			width: 150,
			title: 'Phone Postal Code',
		},
		{ name: 'phoneNumber', type: 'text', width: 150, title: 'Phone Number' },

		{ type: 'control' },
	],
})
