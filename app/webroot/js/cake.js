(function($) {
	$(document).ready(function() {
		$(".submit").prepend('<input id="back-button" value="Back" onclick="window.location.href=\'/cakephp/\'" type="button">&nbsp;&nbsp;');
	});
})(jQuery);