$(document).ready(function(){
	$(".cmnt").click(function(){
        /*
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div>
</div>
        <div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
</div>
<div class="panel-body">


</div>
</div>
</div>
</div>

<div class='col-sm-1'>
<div class='thumbnail'>
<img class='img-responsive user-photo' src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'>
</div>
</div>
        <div class='col-sm-5'>
<div class='panel panel-default'>
<div class='panel-heading'>
<strong>myusername</strong> <span class='text-muted'>commented 5 days ago</span>
</div>
<div class='panel-body'>
"+x+"

</div>
</div>
</div>
</div>
*/
var x=$("textarea:first").val();
var res="<div class='col-sm-1'><div class='thumbnail'><img class='img-responsive user-photo' src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'></div></div>"+"<div class='col-sm-5'><div class='panel panel-default'><div class='panel-heading'><strong>myusername</strong> <span class='text-muted'>commented 5 days ago</span></div><div class='panel-body'>"+x+"</div></div></div>";
    $(".row:last").html(res);
     });  
});