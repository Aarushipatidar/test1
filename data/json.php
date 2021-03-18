<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#color').click(function(){
				$.ajax({
					type: "GET",
					url: "https://jsonplaceholder.typicode.com/photos",
					cache: false,
					success: function(data){
						console.log(data);
						for(var i = 0; i < data.length; i++){
						    
							var html = '';
							html += '<tr>';
                            html += '<td>'+data[i].id+'</td>';
			    	        html += '<td>'+data[i].title+'</td>';
			    	        html += '<td><img src='+data[i].thumbnailUrl+'></td>';
			    	        html += '</tr>';
			    	        $('#detail').append(html);
						}
					}
				});
			});
		});

	</script>
    </head>
    <html>
          <input type="button" value="Display" id="color">
          <table id="detail" border="2">
          	<tr>
          		<td>Id</td>
          		<td>Title</td>
                <td>Image</td>
            </tr>
        </table>
    </html>