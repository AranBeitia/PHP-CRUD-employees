

    $(window).on("load", function printEmployee(){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get("id");
        
        return $.ajax({
            type: "GET",
            url: "../src/library/employeeController.php?id=" + id,
            data: id,
        success: function(response, id){
            if(response){
                console.log(id)
            }
            else {
                console.log("no hola")
            }
            // $("#name").attr("value", `${data.name}`)
        },
    })
})