(function($) {
	$(document).ready(function() {
		$(".submit").prepend('<input id="back-button" value="Back" onclick="window.location.href=\'/cakephp/users/admin_index\'" type="button">&nbsp;&nbsp;');
	});
})(jQuery);