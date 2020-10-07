
$(document).ready(function(){
	var url = "<?php echo site_url('page/')?>";

	$('#province').on('change', function(){
		var province_id = $("#province").val();

		$.ajax({
			url: url + 'get_city/' + province_id,
			type: 'GET',
			cache: false,
			dataType: 'json',
			success: function(data) {
				console.log(data);
			}
		});
	})
})