<?php
echo'
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script>
	$(".nav a").on("click", function() {
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});
</script>
';
?>