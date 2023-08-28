"use strict";

import Tabs from "../../classes/Tabs.js";
import { renderModalContent } from "./renderStudents";

const tabs = new Tabs(".students__card-btn", ".card__section", "students");

window.addEventListener("DOMContentLoaded", () => tabs.openCard());

// При клике на кнопки
tabs.clickButtons("active", (data) => renderModalContent(data));