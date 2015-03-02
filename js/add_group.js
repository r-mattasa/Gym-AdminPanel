$(document).ready(function(){
    $("#save").click(function(){
		ajax("done");
	});

       $("#add_new").click(function(){
       $("#question_table").hide("fast");   
    });
      $("#add_questions").click(function(){
       $("#question_table").show("fast"); 
        $("#question-table-new").fadeOut("fast");   
    });
          $("#define_newques").click(function(){
       $("#question-table-new").show("fast"); 
        $("#question_table").fadeOut("fast"); 
    });

       function ajax(action,id){
           
		if(action =="done")
			data = $("#userinfo").serialize()+"&action="+action;
		else if(action == "delete"){
			data = "action="+action+"&item_id="+id;
		}

		$.ajax({
			type: "POST", 
			url: "ajax.php", 
			data : data,
			dataType: "json",
			success: function(response){
				if(response.success == "1"){
					if(action == "done"){
						$(".entry-form").fadeOut("fast",function(){
							$(".table-list").append("<tr><td>"+"GRP1"+"</td><td>"+response.$gname+"</td><td>"+"0"+"</td><td>"+"<a href='#'>Delete</a>"+"</td><td><a href='#'>Delete</a></td></tr>");	
							if ( ! $.browser.msie ) {
								$(".table-list tr:last").effect("highlight", {
									color: '#4BADF5'
								}, 1000);
							}
						});	
					}else if(action == "delete"){
						var row_id = response.item_id;
						if ( ! $.browser.msie ) {
							$("a[id='"+row_id+"']").closest("tr").effect("highlight", {
								color: '#4BADF5'
							}, 1000);
						}
						$("a[id='"+row_id+"']").closest("tr").fadeOut();
					}
				}
			},
			error: function(res){
				alert("Unexpected error! Try again.");
			}
		});
	}
});

