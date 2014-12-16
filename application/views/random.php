<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<style type="text/css">
	.cand-list {
        max-width: 300px;
        margin: 0 auto 20px;
        
      }
    .cand-del {

    }
    .result{
    	font-size: 40px;
    }
</style>
</head>

<body>

	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
			<div class="input-group">
				<input id="candi_name" type="text" class="form-control">
		      	<span class="input-group-btn">
		        	<button id="add_candidate" class="btn btn-default" type="button">Add</button>
		      	</span>
		      	
		    </div><!-- /input-group -->
			<table id="tab_candi" class="table table-bordered table-hover">
				<caption>Now we have</caption>
				<tbody>
	
				</tbody>
			</table>
			<a id="toggle" class="btn btn-primary btn-lg btn-block">戳</a>
			<div id="result_id" class="col-md-12 result text-center">
			1
			</div>
			<div id="result_name" class="col-md-12 result text-center">
			xx	
			</div>
			</div>
		</div>
		
	</div>
		<script type="text/javascript">
		var candidates = new Array();
		function run(){
	    	var cur = Math.floor(Math.random() * candidates.length);
	    	
	    	$("#result_id").text(cur);
	    	$("#result_name").text(candidates[cur]);

	    }

	     $(document).ready(function(){
		    var i = 0;
		    
		    $("#add_candidate").click(function(){
		    	delBtn = document.createElement("a"); 
				delBtn.class="btn btn-danger";  
				delBtn.innerHTML="X";  
		    	$('#tab_candi').append('<tr id="candi'+i+'"></tr>');
		      	$('#candi'+i).html("<td>"+ i +"</td> <td>" + $("#candi_name").val() + "</td> <td></td> ");
		      	candidates.push("-"+ $("#candi_name").val() + "-");
		      i++;
		  	});
		   
		  	var isRunning = false;
		  	var runningID;
		  	$("#toggle").click(function(){
		  		$("#toggle").toggleClass("btn-danger");
		  		if (isRunning) {
		  			isRunning = false;
		  			clearInterval(runningID);
		  		}else{
		  			isRunning = true;
		  			runningID = setInterval("run()",50);
		  		}
		  	})

		});
	</script>

</body>
