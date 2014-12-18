$(document).ready(function(){
	jQuery.validator.messages.required = "";
	$("#payment_form").validate({
		rules: {
			product: {
				required:true
			},
			pay: {
				required:true
			},
			email: {
				required:true,
				email:true,
				remote: "/mimes/includes/email_check.inc.php"
			},
			agb: {
				required:true
			}
		},
		messages:{
			product: {
				required: "Bitte w�hlen Sie einen Artikel"
			},
			pay: {
				required: "Bitte w�hlen Sie eine Zahlungsart"
			},
			email: {
				required: "Biite tragen Sie Ihre Email-Adresse ein.",
				email: "Bitte geben Sie eine valide Email-Adresse an, zum Beispiel: ich@meinedomain.de",
				remote: jQuery.validator.format("Diese Email-Adresse ist bereits vergeben, bitte w�hlen Sie eine andere Adresse.")
			},
			agb: {
				required: "Bitte best�tigen Sie die AGB"
			}
		}
	});
    $('#voucher_code_div').css({
        'display': 'none'
      });
    $('#paypal').click(function () { 
        $('#voucher_code_div').slideUp(); 
      });
    $('#transfer').click(function () { 
        $('#voucher_code_div').slideUp(); 
      });
    $('#creditcard').click(function () { 
        $('#voucher_code_div').slideUp(); 
      });
    $('#voucher').click(function () { 
        $('#voucher_code_div').slideDown(); 
      });
    // Gutschein, wenn selektiert: anzeigen, validieren
    if (document.payment_form.pay[3].checked = true){
        // Sichtbar beim zur�ckkommen auf Site
    	$('#voucher_code_div').css({
            'display': 'block'
          });
//		bis hier funktioniert (Altert wird ausgegeben - scheint mir ein zeitliches Problem zu sein?!
//		Script wird einmal, nach Seitenaufbau abgearbeitet und gut, dazu muss das nochmal in der Klickvariante stehen    
    	$("#payment_form").validate({
    		rules: {
    			voucher_code: {
    				required:true
    			}
    		},
    		messages:{
    			voucher_code: {
    				required: "Bitte geben Sie einen g�ltigen Gutscheincode ein"
    			}
    		}
    	});
	}
});
