function ShowHide() {
	const doc = document;

	this.show = function(idTarget) {
		let element = doc.getElementById(idTarget);
		element.classList.remove("w3-hide");
		element.classList.add("w3-show");
	};

	this.hide = function(idTarget) {
		let element = doc.getElementById(idTarget);
		element.classList.remove("w3-show");
		element.classList.add("w3-hide");
	};
}