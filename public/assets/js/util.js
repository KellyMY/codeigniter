const BASE_URL = "http://localhost/codeig/";

function clearErrors(){
	$(".has-error").removeClass("has-error");
	$(".help-block").html("");
}
function showErrors(error_list){
	clearErrors();

	$.each(error_list, function(id,message){
		$(id).parent().parent().addClass("has-error");
		$(id).parent().siblings(".help-block").html(message);
	})
}

function showErrorsModal(error_list){
	clearErrors();

	$.each(error_list, function(id,message){
		$(id).parent().parent().addClass("has-error");
		$(id).parent().next().children(".help-block").html(message);
	})
}

function loadingImg(message =""){
	return "<i class='fa fa-circle-notch fa-spin'></i>" + message;
}