var options = {
	url: function (phrase) {
		return "searchMedicament.php?search=" + phrase;
	},

	getValue: function (element) {
		return element.denomination;
	},
	list: {
		onClickEvent: function (event) {
			var data = $("#provider-json").getSelectedItemData();
			$.ajax({
				url: 'medicament.php?id=' + data.codeCIS,
				dataType: "html",
				success: function (response) {//response is value returned from php (for your example it's "bye bye"
					var responseJson = $.parseJSON(response);
					$(".reponse").css({
						backgroundColor: "#e6fbfe",
						marginBottom: "15px",
						borderRadius: "20px",
						paddingTop: "5%",
						paddingRight: "5%",
						paddingLeft: "5%",
						paddingBottom: "5%",
						display: "block",
					});
					$("#nom").text(responseJson.denomination);
					$("#prescription").html(responseJson.indicationsTherapeutiques).css("text-align", "left");
					$("#prix_titre").text("Prix en euros :");
					$("#prix").text(responseJson.presentations[0].prix == null ? "libre" : responseJson.presentations[0].prix);
					$("#taux_titre").text("Taux de remboursement :");
					$("#taux").text(responseJson.presentations[0].tauxRemboursement.length == 0 ? "N/R" : responseJson.presentations[0].tauxRemboursement);
					$("#IR_titre").text("Indication de remboursement :");
					$("#indicremboursement").html(responseJson.presentations[0].indicationsRemboursement.length == 0 ? "Inconnue" : responseJson.presentations[0].indicationsRemboursement);
					$("#gene_titre").text("Générique(s) :");
					if (responseJson.infosGenerique) {
						var content = "";
						for (var i = 0; i < responseJson.infosGenerique.autresMedicamentsGroupe.length; i++) {
							content += responseJson.infosGenerique.autresMedicamentsGroupe[i].denomination + "<br>";
						}
						// console.log(content);
						// $("#generique").html(content);
						$("#generique").html(content.toLowerCase());
					} else {
						// console.log(content);
						$("#generique").html(responseJson.infosGenerique == null ? "Aucun" : responseJson.infosGenerique);
					}
				}
			});

		}
	},

	// AJAX SETTINGS //
	ajaxSettings: {
		dataType: "json",
		method: "POST",
		data: {
			dataType: "json"
		}
	},

	preparePostData: function (data) {
		data.phrase = $("#provider-json").val();
		return data;
	},

	requestDelay: 400

};

$("#provider-json").easyAutocomplete(options);


//--------------------------------- animation navbar--------------------------------//

$(".button-group > div").click(function () {
	$('.button-group > div.active').not(this).removeClass('active');
	$(this).toggleClass("active");
});

$(document).ready(function () {
	$(document).on("scroll", onScroll);

	//smoothscroll
	$('.menu a').on('click', function (e) {
		e.preventDefault();
		$(document).off("scroll");
		console.log('click');

		$('.menu a').each(function () {
			$(this).removeClass('active');
		})
		$(this).addClass('active');

		var target = this.hash,
			menu = target;
		$target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top + 2
		}, 500, 'swing', function () {
			window.location.hash = target;
			$(document).on("scroll", onScroll);
		});
	});
});

function onScroll(event) {
	var scrollPos = $(document).scrollTop();
	$('.menu a').each(function () {
		var currLink = $(this);
		var refElement = $(currLink.attr("href"));
		if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			$('.menu a').removeClass("active");
			currLink.addClass("active");
		}
		else {
			currLink.removeClass("active");
		}
	});
}

//--------------------------------- modal --------------------------------//
