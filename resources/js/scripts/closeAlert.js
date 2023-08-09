import Alert from "../classes/Alert.js";

const alert = new Alert();

document.querySelector(".alert__close").addEventListener("click", () => alert.close());