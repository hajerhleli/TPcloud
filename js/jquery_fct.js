/**
 * 
 */
$(function(){
	$(".articles").click(function(){
		 var id=$(this).attr("name");
		 var cat= $(this).attr("href");
		// alert(test);
		 if (cat != '#') {
			 var arr = { "id": id};
	
				$.post("scripts/redirection.php", arr, function (data) {
					document.location.href="article.php?"+cat;
			});
		 }

			return false;
		});
});