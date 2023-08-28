"use strict";

import Tabs from "../../classes/Tabs.js";
import { renderModalContent } from "./renderEmployees.js";

const tabs = new Tabs(".card__header-btn", ".card__content-item", "employees");

window.addEventListener("DOMContentLoaded", () => tabs.openCard());

tabs.clickButtons("active", (data) => renderModalContent(data));