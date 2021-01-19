export function getLocations() {
    return fetch('/src/utils/locations.json')
        .then(response => { return response.json() })
        .then(locations => {
            return locations
        })
        .catch(error => { return error })
}