$(function(){
	$('#btn_add_list').click(function(){
		
		clearErrors();
		$("#form_list")[0].reset();
		$('#modal_list').modal();
	})
	$('#btn_add_listspec').click(function(){
		$('#modal_list_specific').modal();
	})
	$('#btn_add_team').click(function(){
		$('#modal_team').modal();
	})
	$('#btn_add_user').click(function(){
		$('#modal_user').modal();
	})
	$('#form_list').submit(function(){
		$.ajax({
			type: "POST",
			url: BASE_URL + "restrict/ajax_save_list",
			dataType: "json",
			data: $(this).serialize(),
			beforeSend: function(){
				clearErrors();
				$('#btn_save_list').siblings().children(".help-block").html(loadingImg("Verificando..."));
			},
			sucess: function(response){
				clearErrors();
				if(response['status']){
					$('#form_list').modal("hide");
				}else{
					showErrorsModal(response['error_list']);
				}
			}
		})
		return false;
	})
})