$(document).ready(function(){
	$('#fornecedorr').submit(function(){
		var nome=[];
		$('.Fornecedores').each(function(index){

		nome[$('.Fornecedores').attr('name')]=$(this).val();

		});
		console.log(nome);
		$('#hidden').val(nome);		
		
	});
});
	