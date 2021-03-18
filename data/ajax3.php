<!DOCTYPE>
<html>
<head>
	<title>AJAX AND JSON</title>
</head>
<body>
	<div class="ajax-container">
		<input type="button" id="call" value="Ajax Call"/>
		<div class="display">
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	var count = 0;
	$("#call").click(function(){
		fetchDataAndDisplay();
	});
	function fetchDataAndDisplay(){
		$.ajax({
			url:"https://jsonplaceholder.typicode.com/posts",
			method:"GET"
		}).done(function(data){
			var start = count > 0 ? 5 * count : count;
			var end = start + 5;
			var str = '';
			for(var i=start; i<end; i++){
				str+= '<div class="item-details">' +
				      'user postid is = ' + data[i].userId + '<br />' +
				      'user id is = ' + data[i].id + '<br />' +
				      'user name is = ' + data[i].title + '<br />' +
				      'body is = ' + data[i].body + '<br />' +
				'</div>';
			}
			if(end >= data.length){
				count = 0;
				$(".display").append("<h1>List over!!!</h1>");
				return;
			}
			count++;
			$(".display").empty();
			$(".display").append(str);
		});
	}
</script>
</html>