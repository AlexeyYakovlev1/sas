"use strict";

import Loader from "../classes/Loader.js";

const loader = new Loader();

loader.show();

window.addEventListener("load", () => loader.close());