import { getLocations } from './utils-module.js';

// Variables
let locations = []

async function main() {
	try {
		locations = await getLocations()

		// Se llena el departments select
		locations.forEach(({ id, departamento }) => {
			$('#departments').append(`<option value="${id}">${departamento}</option>`)
		});

		$('#departments').on('change', function (e) {
			$('#cities').html("");
			const { ciudades } = locations.find(department => department.id === parseInt($(this).val()))

			ciudades.forEach(city => {
				$('#cities').append(`<option value="${city}">${city}</option>`)
			})
		});

	} catch (error) {
		console.warn(error)
	}
}

main()