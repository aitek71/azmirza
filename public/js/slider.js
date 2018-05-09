function Slider() {
	const doc = document;
	let count = 0, countDot;

	this.getSlider = function (className){ return doc.getElementsByClassName(className); };

	this.controlSlider = function (className, classNameDot, counter){
		count += counter;
		let slider = this.getSlider(className);
		if(count < 0){ count = slider.length - 1; }
		if(count >= slider.length) { count = 0; }
		for(let i = 0; i < slider.length; i++){ 
			slider[i].classList.remove("w3-show"); 
			slider[i].classList.add("w3-hide"); 
		}
		slider[count].classList.remove("w3-hide"); 
		slider[count].classList.add("w3-show");
		this.controlDotSlider(classNameDot);
	};
	this.controlDotSlider = function (className){
		let slider = this.getSlider(className);
		for(let i = 0; i < slider.length; i++){ 
			slider[i].classList.remove("w3-border-green"); 
			slider[i].classList.add("w3-border-white"); 
		}
		slider[count].classList.remove("w3-border-white"); 
		slider[count].classList.add("w3-border-green"); 
	}
}