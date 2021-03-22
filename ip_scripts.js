$( document ).ready(function() {
    $.ajax({
		type: "GET",
		url: "https://api.ipgeolocation.io/ipgeo?apiKey=a8183a7c1256423ca37a38e69cd17c60",
		success: function (data) {
			$(".hideme").fadeIn(1000);
			$("#ip_loc").text(data.city + ", " + data.country_name);
			$("#ip_isp").text(data.isp);
			// $("#ip_ip").text(data.ip);
			$("#ip_flag").attr("src", data.country_flag);
		}
	});
});