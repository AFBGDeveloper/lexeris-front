function traerCiudades() {

	const xhttp = new XMLHttpRequest();

	xhttp.open('GET', 'ciudades.json', true);
	xhttp.send();

	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			// console.log(this.responseText);

			let datos = JSON.parse(this.responseText);
			// console.log(datos);

			let res = document.querySelector('#res');

			res.innerHTML = '';

			for (let item of datos) {
				// console.log(datos.id);
				for (var i = 0; i < item['ciudades'].length; i++) {
					res.innerHTML += `<option>${item.ciudades[i]}, ${item.departamento}</option>`;
				}


			}
		}
	}
}

traerCiudades();