<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<style type="text/css">
	@media (min-width: @screen-sm-min) { 
		.masthead {
    		padding: 30px 0;
    	}
	 }
	.cand-list {
        max-width: 300px;
        margin: 0 auto 20px;
        
      }
    .cand-del {

    }
    .result{
    	font-size: 40px;
    }
    .col-center-block{
    	float: none;
    	display: block;
    	margin: 0 auto;
    }
    .masthead {
    	padding: 70px 0;
    }
    

</style>
</head>

<body>
	<header class="navbar"></header>
	<main class="masthead">
		<h1 class="text-center"> 戳你妹 </h1>
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-md-4 col-center-block">
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
					
				</div>
			</div>
			<div class="row">
				<div id="toggle" class="col-xs-8 col-md-1 btn btn-primary btn-lg col-center-block">戳</div>
				
			</div>
			<div id="result_id" class="col-md-12 result text-center"> </div>
				<div id="result_name" class="col-md-12 result text-center"> </div>
			
		</div>
	</main>
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
