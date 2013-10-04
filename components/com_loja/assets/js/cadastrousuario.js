jQuery(function($){
	$("#register_cpf").mask("999.999.999-99");
	$("#register_datanascimento").mask("99/99/9999");
	$("#register_cep").mask("99999-999");
	$("#register_telefone1").mask("9999-9999?9");
	$("#register_telefone2").mask("9999-9999?9");
	$("#cep_carrinho").mask("99999-999");
	
});


var last_cep = 0;
var address;


//Evento keyup no campo do cep
$('#register_cep').live('keyup',function(){
	var cep = $.trim($('#register_cep').val()).replace('_','');
	if(cep.length >= 9){
		if(cep != last_cep){
			busca();
		}
	}
}); 

function busca() {
	var cep = $.trim($('#register_cep').val());
    var url = 'http://xtends.com.br/webservices/cep/json/'+cep+'/';

	$.post(url,{cep:cep},
        function (rs) {
            rs = $.parseJSON(rs);
            if(rs.result == 1){
                address = rs.logradouro + ', ' + rs.bairro + ', ' + rs.cidade + ', ' + ', ' + rs.uf;
                
                $('#register_endereco').val(rs.tp_logradouro+' '+rs.logradouro);
                $('#register_bairro').val(rs.bairro);
                $('#register_cidade').val(rs.cidade);
                $('#register_estado').val(rs.uf.toUpperCase());
                //$('#register_cep').removeClass('invalid');
                $('#register_numero').focus();
                last_cep = cep;
            }
            else{
                //$('#cep').addClass('invalid');    
                $('#cep').focus();  
                last_cep = 0;
            }
        })  
}