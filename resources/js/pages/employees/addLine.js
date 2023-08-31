"use strict";

import Table from "../../classes/Table";

const table = new Table(
	".card__content-meetingResult-addBtn",
	".card__content-meetingResult-delBtn",
	".card__content-meetingResult-sheet"
);
const identClsMeeting = "results-of-meeting";

table.add(`
	<tr class="new-row ${identClsMeeting}">
		<td>
			<input type="text" contenteditable="true" name="meetingResult">
		</td>
		<td>
			<input type="text" contenteditable="true" name="meetingResult">
		</td>
		<td>
			<input type="text" contenteditable="true" name="meetingResult">
		</td>
	</tr>
`, identClsMeeting);
table.remove(identClsMeeting);