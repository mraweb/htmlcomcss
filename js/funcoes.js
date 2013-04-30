$(document).ready(function(){
	$("a[rel=external]").attr('target','_blank');
});

// skype oculto
jQuery(document).ready(function(){
	jQuery('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

// validacao formulario
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
});
function checkHELLO(field, rules, i, options){
	if (field.val() != "HELLO") {
		return options.allrules.validate2fields.alertText;
	}
}

$('#tel').mask('(00) 0000-0000', 
    {onKeyPress: function(phone, e, currentField, options){
     var new_sp_phone = phone.match(/^(\(11\) 9(5[0-9]|6[0-9]|7[01234569]|8[0-9]|9[0-9])[0-9]{1})/g);
     new_sp_phone ? $(currentField).mask('(00) 00000-0000', options) : $(currentField).mask('(00) 0000-0000', options)
   }
});

/* ORCAMENTO */
//RESPONSAVEL POR PEGAR O VALOR DAS PAGINAS NA INDEX E JOGAR NO ENVIAR LAYOUT
$(document).ready(function(){
	$('.calc-order').click(function(){
		var valorOrder = $("#order-pages").val();
		$("#orderNow_pages").val(valorOrder);
		calcPriceInt();
	});

	//FAZER O ANIMATE DA BARRA SCROLL DO NAVEGADOR
	$('.animate').bind('click',function(e){
        var id = $(this).attr('href');
        
        e.preventDefault();
        $('html,body').animate({scrollTop: $(''+id+'').offset().top},'slow'); 
    });

    //VALIDAÃ‡ÃƒO DOS FORMULÃRIOS
    $(".form-layout").validate({
		//wrapper: 'span',
		meta: "validate",
		rules: {
			nome_order: "required",
			email_order: {
				required: true,
				email: true
			},
			link_projeto: "required",
			orderNow_pages: "required"
		}
	});

	$(".form-contato").validate({
		//wrapper: 'span',
		meta: "validate",
		rules: {
			nome_cont: "required",
			email_cont: {
				required: true,
				email: true
			},
			assunto_cont: "required",
			msg_cont: "required"
		}
	});
})

//Calculando orÃ§amento
function calcPrice() {
 var pages = Number(document.getElementById("order-pages").value);
 var subpages = pages - 1;
 var totalPrice = 380;
 
 if (pages!=1 && pages!=0) {
	  var totalSubs = subpages * 152;
	  totalPrice = totalSubs + 380;
 }
	document.getElementById('total-quant').innerHTML = 'R$ <strong>'+totalPrice+'</strong>';
}

function calcPriceInt() {
 var pages = Number(document.getElementById("orderNow_pages").value);
 var subpages = pages - 1;
 var totalPrice = 380;
 
	 if (pages!=1 && pages!=0) {
		var totalSubs = subpages * 152;
		totalPrice = totalSubs + 380;
	 }
	document.getElementById('totalNow-quant').innerHTML = 'R$ <strong>'+totalPrice+'</strong>';
}