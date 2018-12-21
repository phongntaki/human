$(document).ready(function() {

	$("#hnnavatar").click(function(){
        $("#hnnavatarfile").click();
    });
});
function eshowimg(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#hnnavatar')
        .attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
