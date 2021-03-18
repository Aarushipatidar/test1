$(document).ready(function(){
	$("#add").click(function(){
		var newListItem = $("#addtolist").val();
		if (newListItem.length>0){
			$("#todolist").append('<li> <input type="checkbox" />' + newListItem + '<button class="delete">Delete</button></li>');
			$("#addtolist").val('');
			alert("Successfully added!");
		}
});


	function deleteItem(){
		$(this).parent().remove();
	}

$(function(){

	$(document).on('click', '.delete', deleteItem);
});	

});

 