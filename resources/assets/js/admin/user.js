$(document).ready(function() {
	$('.delete').click(function(e) {
		var r = confirm("Ban co thuc su muon xoa thong tin nay!");
		if (r == true) {
		    console.log("Ban vua an ok");
		} else {
			e.preventDefault();
		    console.log("ban vua an huy");
		}
	})
})