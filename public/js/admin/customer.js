$(document).ready(function() {

	$("#ennavatar").click(function(){
        $("#ennavatarfile").click();
    });
	$(".nneditcustomer").click(function(){ 
		$("#ennidCustomer").val($(this).attr('editid')) ;
		$("#enntitle").val($(this).attr('title')) ;
		$("#ennfullname").val($(this).attr('name')) ;

		if($(this).attr('sex')=="0"){
			$("input:radio[name=ennsex]")[0].checked=true ;
		}
		else{
			$("input:radio[name=ennsex]")[1].checked=true ;
		}
		$("#ennmailcus").val($(this).attr('cusemail')) ;
		$("#ennbirthday").val($(this).attr('birthday')) ;
		$("#ennphonecus").val($(this).attr('phone'));
		$("#ennaddcus").val($(this).attr('cusaddress'));
		$("#enneducation").val($(this).attr('education'));

		if($(this).attr('education')=="Cấp 3"){
			$("select[name=enneducation] option")[1].selected=true;
		}
		else if($(this).attr('education')=="Cao Đẳng"){
			$("select[name=enneducation] option")[2].selected=true;
		}
		else if($(this).attr('education')=="Đại học"){
			$("select[name=enneducation] option")[3].selected=true;
		}
		else{
			$("select[name=enneducation] option")[4].selected=true;
		}

		//Language_jp
		if($(this).attr('language_jp')=="N1"){
			$("select[name=ennlanguage_jp] option")[1].selected=true;
		}
		else if($(this).attr('language_jp')=="N2"){
			$("select[name=ennlanguage_jp] option")[2].selected=true;
		}
		else if($(this).attr('language_jp')=="N3"){
			$("select[name=ennlanguage_jp] option")[3].selected=true;
		}
		else if($(this).attr('language_jp')=="N4"){
			$("select[name=ennlanguage_jp] option")[3].selected=true;
		}
		else{
			$("select[name=ennlanguage_jp] option")[4].selected=true;
		}

		$("#ennLanguageOther").val($(this).attr('language_other'));
		$("#ennIntroduce").val($(this).attr('introduce'));
		$("#ennDesire").val($(this).attr('desire'));
		$("#ennfacebook").val($(this).attr('cusface'));
		$("#ennimguserold").val($(this).attr('imgo'));	
		$("#ennavatarfile").val("");
		if($(this).attr('imgo').search('https')==-1){
			$("#ennavatar").attr('src',"../../public/img/customers/"+$(this).attr('imgo'));
			
		} else{
			$("#ennavatar").attr('src',""+$(this).attr('imgo'));
		}
		$('.nn-modal-edit-Customer').modal('show');
	});
	$(".nndremovecus").click(function(){
		$("#dennidCustomer").val($(this).attr('editid')) ;
		$("#deletename").html($(this).attr('name')) ;
		$("#dennimgCustomer").val($(this).attr('imgo'));	
		$('.nn-modal-delete-Customer').modal('show');

	});
});
function eshowimg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#ennavatar')
        .attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
