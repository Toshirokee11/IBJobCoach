$('#PruebaGratuita').on('submit', '#PruebaGratuita1', function(event) {
	event.preventDefault();
	var $form = $(this);
	$.ajax({
		url			: $form.attr('action'),
		type		: $form.attr('method'),
		data		: $form.serialize(),
		beforesend: function(){
		},
		success: function(response){
		swal(response);
		document.getElementById("PruebaGratuita1").reset();
	}
	})
});