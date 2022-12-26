<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>internet connection status</title>

		<script>
			function CheckOnlineStatus(msg) {
				var status = document.getElementById("status");

				// i can use this along with the <p> element in the body with the internal css
			 	// var condition = navigator.onLine ? "Connected" : "Please check your internet connection";  
				// var state = document.getElementById("state");
				// state.innerHTML = condition;    


				// i can use this directly with <div> element in the body alone with out thecss
				if (navigator.onLine) {
					status.textContent="Connected";
					status.style.backgroundColor="green";
				}else{
					status.textContent="Please check your internet Connection";
					status.style.backgroundColor="red";
				}     

			}

			
			function Pageloaded() {
				CheckOnlineStatus("load");
				document.body.addEventListener("offline", function () {
					CheckOnlineStatus("offline")
				}, false);
				document.body.addEventListener("online", function () {
	           		CheckOnlineStatus("online")
				}, false);
			}


		</script>
		<style>
			/*#state{
				background-color: #ff0000;
				color: #fff;
				width: 50%;
				text-align: center;
			}*/

		</style>
	</head>
	<body onload="Pageloaded()">
		<div id="status"><p id="state"></p></div>
	</body>
</html>