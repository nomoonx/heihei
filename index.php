<!DOCTYPE HTML>
<html lang="en-US">
  	<head>
    	<meta charset="UTF-8">
	   	<script type="text/javascript" src="js/jquery.js"></script>
	    <title>4TT</title>
	    <script type="text/javascript">
      		$(document).ready(function(){
       			$("#btn").click(function(){
         			console.log("i'm in");
         			console.log($("#op option:selected").val());
         			jQuery.ajax({
	           			dataType: "json",
           				url: "action/atomic.php",
           				type: "GET",
           				data: {arg1:$("#arg1").val(),arg2:$("#arg2").val(),op:$("#op option:selected").val()},
           				success: function(data){
	             			var htmlobj="";
            				$.each(data,function(key,val){
	              				htmlobj+=val;
              					if (key=="arg2") htmlobj+="=";
            				});
            				htmlobj+="<br/>";
            				$("#result").append(htmlobj);
           				}
         			});
       			});
      		});
    	</script>
  	</head>
  	<body>
      	<label for="arg1">arg1:</label>
      	<input type="text" id="arg1" name="arg1"/>
      	<select id="op">
	        <option value="0">+</option>
        	<option value="1">-</option>
        	<option value="2">*</option>
        	<option value="3">/</option>
      	</select>
      	<label for="arg2">arg2:</label>
      	<input type="text" id="arg2" name="arg2"/>
      	<button id="btn" type="button">submit</button> 
      	<br/>
    	<div id="result">
    	</div>
  	</body>
</html>

