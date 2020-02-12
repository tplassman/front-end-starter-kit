export default class {
	constructor({
		id,
	}) {
		const el = document.getElementById(id);

		console.log(`Welcome to the ${el} event!`);
	}
}
