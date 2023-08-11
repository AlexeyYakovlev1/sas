const studentsSearch = document.querySelector(".students__search");
const students = [
	{ first_name: "Алексей", last_name: "Яковлев", patronymic: "Николаевич" },
	{ first_name: "Виктор", last_name: "Смирнов", patronymic: "Петрович" }
];

studentsSearch.addEventListener("input", () => {
	if (studentsSearch.value.length >= 3) {
		setTimeout(() => {
			console.log(students.filter((student) => {
				const { first_name, last_name, patronymic } = student;
				const fullName = `${last_name}${first_name}${patronymic}`.toLowerCase();

				return fullName.includes(studentsSearch.value.toLowerCase().split(" ").join(""));
			}));
		}, 500);
	}
});