var clients = [
	{
		Name: 'Otto Clay',
		Age: 25,
		Country: 1,
		Street: 'Ap #897-1459 Quam Avenue',
		Married: false,
	},
	{
		Name: 'Connor Johnston',
		Age: 45,
		Country: 2,
		Street: 'Ap #370-4647 Dis Av.',
		Married: true,
	},
	{
		Name: 'Lacey Hess',
		Age: 29,
		Country: 3,
		Street: 'Ap #365-8835 Integer St.',
		Married: false,
	},
	{
		Name: 'Timothy Henson',
		Age: 56,
		Country: 1,
		Street: '911-5143 Luctus Ave',
		Married: true,
	},
	{
		Name: 'Ramona Benton',
		Age: 32,
		Country: 3,
		Street: 'Ap #614-689 Vehicula Street',
		Married: false,
	},
]

var countries = [
	{ Name: '', Id: 0 },
	{ Name: 'United States', Id: 1 },
	{ Name: 'Canada', Id: 2 },
	{ Name: 'United Kingdom', Id: 3 },
]

$('#jsGrid').jsGrid({
	width: '100%',
	inserting: true,
	editing: true,
	sorting: true,
	paging: true,
	// controller: {
	// 	loadData: function () {
	// 		var d = $.Deferred()

	// 		$.ajax({
	// 			url: '../resources/employees.json',
	// 			dataType: 'json',
	// 		}).done(function (response) {
	// 			d.resolve(response.value)
	// 		})

	// 		return d.promise()
	// 	},
	// },
	data: clients,

	fields: [
		{ name: 'id', type: 'text', width: 50, validate: 'required' },
		{ name: 'Name', type: 'text', width: 150, validate: 'required' },
		{ name: 'Email', type: 'text', width: 150 },
		{ name: 'Age', type: 'number', width: 50 },
		{ name: 'Street No.', type: 'text', width: 50 },
		{ name: 'City', type: 'text', width: 150 },
		{ name: 'Phone State', type: 'text', width: 50 },
		{ name: 'Phone Postal Code', type: 'text', width: 150 },
		{ name: 'Phone Number', type: 'text', width: 150 },
		// {
		// 	name: 'Country',
		// 	type: 'select',
		// 	items: countries,
		// 	valueField: 'Id',
		// 	textField: 'Name',
		// },
		// { name: 'Married', type: 'checkbox', title: 'Is Married', sorting: false },
		{ type: 'control' },
	],
})
