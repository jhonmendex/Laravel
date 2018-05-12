$('#generarscript').click(function(){
	var idproj = $("#idproj").val();
	var routescript ="/script/"+idproj;
    $('#generarscript').attr("href",routescript);
});
$('#generarclns').click(function(){
	var idproj = $("#idproj").val();
	var routeclns ="/project/"+idproj+"/edit";
    $('#generarclns').attr("href",routeclns);
});