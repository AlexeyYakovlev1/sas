import Loader from "../classes/Loader.js";

const loader = new Loader();

loader.show();

window.addEventListener("DOMContentLoaded", () => loader.close());