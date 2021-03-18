<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#color').click(function(){
				$.ajax({
					type: "GET",
					url: "https://jsonplaceholder.typicode.com/users",
					cache: false,
					success: function(data){
						console.log(data);
						for(var i = 0; i < data.length; i++){
						    
							var html = '';
							html += '<tr>';
                            html += '<td>'+data[i].id+'</td>';
			    	        html += '<td>'+data[i].name+'</td>';
                            html += '<td>'+data[i].username+'</td>';
			    	        html += '<td>'+data[i].email+'</td>';
			    	        html += '<td>'+data[i].phone+'</td>';
			    	        html += '<td>'+data[i].website+'</td>';
			    	       
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
          		<td>NAME</td>
                <td>USERNAME</td>
                <td>EMAIL</td>
                <td>PHONE NO</td>
                <td>WEBSITE</td> 
                
                <td></td>
            </tr>
        </table>
    </html>