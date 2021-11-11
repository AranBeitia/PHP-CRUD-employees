function ajaxDataTable(employees) {
	$.ajax({
		url: '../src/library/dataTable.php',
		type: 'post',
		datatype: 'json',
		data: employees,
		success: function (response) {
			console.log(response)
		},
	})
}
