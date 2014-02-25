/* welcome massage */

$(document).ready(function() {
	$("#welcome span:nth-child(1)").fadeIn('2000',"linear", function() {
		$("#welcome span:nth-child(2)").fadeIn('2000',"linear", function() {
			$("#welcome span:nth-child(3)").fadeIn('2000',"linear", function() {
				$("#welcome span:nth-child(4)").fadeIn('2000',"linear", function() {
					$("#welcome span:nth-child(5)").fadeIn('2000',"linear", function() {
						$("#welcome span:nth-child(6)").fadeIn('2000',"linear", function() {
							$("#welcome span:nth-child(7)").fadeIn('2000',"linear", function() {
								$("#welcome").fadeOut('5000',"linear");
							});
							
						});
						
					});
					
				});
				
			});
		});
	});
});
