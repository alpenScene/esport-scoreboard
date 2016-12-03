(function ($) {

	var essb = {
		init: function () {
			$('.essb-datetime').datetimepicker({step:15});
		}
	};

	$(document).ready(essb.init);
	
})(jQuery);