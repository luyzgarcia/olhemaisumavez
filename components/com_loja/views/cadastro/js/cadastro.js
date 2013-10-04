jQuery(function($){
	$("#cadastro_cpf").mask("999.999.999-99");
	$("#cadastro_cep").mask("99999-999");
	$("#cadastro_telefone").mask("(999) 9999-9999?9");	
});


var last_cep = 0;
var address;


//Evento keyup no campo do cep
$('#cadastro_cep').live('keyup',function(){
	var cep = $.trim($('#cadastro_cep').val()).replace('_','');
	if(cep.length >= 9){
		if(cep != last_cep){
			busca();
		}
	}
}); 

function busca() {
	var cep = $.trim($('#cadastro_cep').val());
    var url = 'http://xtends.com.br/webservices/cep/json/'+cep+'/';

	$.post(url,{cep:cep},
        function (rs) {
            rs = $.parseJSON(rs);
            if(rs.result == 1){
                address = rs.logradouro + ', ' + rs.bairro + ', ' + rs.cidade + ', ' + ', ' + rs.uf;
                
                $('#cadastro_endereco').val(rs.tp_logradouro+' '+rs.logradouro);
                $('#cadastro_bairro').val(rs.bairro);
                $('#cadastro_cidade').val(rs.cidade);
                $('#cadastro_estado').val(rs.uf.toUpperCase());
                //$('#cadastro_cep').removeClass('invalid');
                $('#cadastro_numero').focus();
                last_cep = cep;
            }
            else{
                //$('#cep').addClass('invalid');    
                $('#cep').focus();  
                last_cep = 0;
            }
        })  
}