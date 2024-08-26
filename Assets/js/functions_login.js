$('.login-content [data-toggle="flip"]').click(function() {
	$('.login-box').toggleClass('flipped');
	return false;
});

//var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){
	if(document.querySelector("#formLogin")){
		let formLogin = document.querySelector("#formLogin");
		formLogin.onsubmit = function(e) {
			e.preventDefault();

			let strIdentificacion = document.querySelector('#txtIdentificacion').value;
			let strPassword = document.querySelector('#txtPassword').value;

			if(strIdentificacion == "" || strPassword == "")
			{
				// swal("Por favor", "Escribe la identificación y la contraseña.", "warning");
				swal({   title: "Por favor",   text: "Escribe la identificación y/o la contraseña",   imageUrl: "Assets/images/error.webp" });
				return false;
			}else{
				//divLoading.style.display = "flex";
				var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				var ajaxUrl = base_url+'/Login/loginUser'; 
				console.log(request);
				console.log(ajaxUrl);
				var formData = new FormData(formLogin);
				console.log(formData);
				request.open("POST",ajaxUrl,true);
				request.send(formData);
				console.log(request.responseText);
				request.onreadystatechange = function(){
					console.log(request);
					if(request.readyState != 4) return;
					if(request.status == 200){
						console.log(request.responseText);
						var jsonMatch = request.responseText.match(/\{.*\}/);
						var jsonText = jsonMatch[0];
						var objData = JSON.parse(jsonText);
						console.log(objData);
						if(objData.status)
						{
							window.location = base_url+'dashboard';
							// swal("Bien", objData.msg, "success");
							// window.location.reload(false);
						}else{
							swal("Atención", objData.msg, "error");
							document.querySelector('#txtPassword').value = "";
						}
					}else{
						swal("Atención","Error en el proceso", "error");
					}
					//divLoading.style.display = "none";
					return false;
				}
			}
		}
	}


}, false);