$(function(){
	
	$("#form").validate({
		rules: {
			nama: {
				required: true,
				minlength: 3
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				number: true,
				minlength: 6
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: 'Data harus diisi',
				minlength: 'Minimum length: 3'
			},
			company: {
				required: 'Data harus diisi'
			},
			phone: {
				required: 'Data harus diisi',
				number: 'Invalid phone number',
				minlength: 'Minimum length: 6'
			},
			email: 'Alamat e-mail tidak valid',
			message: {
				required: 'Data harus diisi'
			}
		},
		success: function(label) {
			label.html('OK').removeClass('error').addClass('ok');
			setTimeout(function(){
				label.fadeOut(500);
			}, 2000)
		}
	});
	
});