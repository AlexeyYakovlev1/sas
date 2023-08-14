const labels = document.querySelectorAll('.card__content-meetingResult-label')
const check = document.getElementById('completed')
const check2 = document.getElementById('inProcess')
labels.forEach(label => {
	label.addEventListener('click', () => {
		var radioName = label.getAttribute('for'),
		radio = document.getElementById(radioName),
		name = radio.getAttribute('name'),
		hasRadio = radio.getAttribute('type') != 'radio'
		if(hasRadio) return;
		if(radio.checked === false){
			labels.forEach(item => item.lastElementChild.style.display = 'none')
			label.lastElementChild.style.display = 'flex'
			radio.checked = 'true'
		}
	})
});
