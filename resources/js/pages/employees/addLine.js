const meetingAddBtn = document.querySelector('.card__content-meetingResult-addBtn')
const meetingTable = document.querySelector('.card__content-meetingResult-sheet')

meetingAddBtn.addEventListener('click', () => {
	createLine(meetingTable)
})

function createLine(sheet){
	const line = document.createElement('tr')

	// column.appendChild(input)
	for(let i=0; i<3; i++){
		const column = document.createElement('td')
		const input = document.createElement('input')
		input.type = 'text'
		input.contentEditable = true
		input.name = 'meetingResult'
		column.appendChild(input)
		line.appendChild(column)
	}
	sheet.lastChild.appendChild(line)
}
