$(document).ready(function(){
	$(".opt").click(function(){
            
            var command;
            if($(this).attr('dept') === "core"){
                command="coreeng.json";
            }else{
                command="qualityeng.json";
            }
            
            $.ajax({
		type: "GET",
                dataType : 'json',
		url: command,
		//data:'keyword='+$(this).val(),
		
		success: function(json){  
                        var rest = "";
                        $.each(json.employees, function(key, empObj) {
                            rest += "<div class='card'><div>Name:"+empObj.name+"</div><div>Designation:"+empObj.designation+"</div><div>Salary:"+empObj.Salary+"</div><div>Shift:"+empObj.Shift+"</div></div>";
                            $('.resultSet').html(rest);
                            //alert(empObj.name);                                                      
                        });                  
		},
		fail: function(){
			alert("It's failed :(");
		}
            });
	});     
       
});