const labels = document.querySelectorAll('.card__content-meetingResult-label');

labels.forEach(label => {
	label.addEventListener('click', () => {
		const radioName = label.getAttribute('for');
		const radio = document.getElementById(radioName);
		const hasRadio = radio.getAttribute('type') != 'radio';

		if (hasRadio) return;

		if (radio.checked === false){
			labels.forEach(item => item.lastElementChild.style.display = 'none');
			label.lastElementChild.style.display = 'flex';
			radio.checked = 'true';
		}
	});
});
