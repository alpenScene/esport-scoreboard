(function ($) {

	var essb = {
		init: function () {
			if ($.fn.datetimepicker) {
				$('.essb-datetime').datetimepicker({step:15});
			}
		}
	};

	$(document).ready(essb.init);
	
})(jQuery);