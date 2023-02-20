import HandleDataFrontEnd from "./FormModule/View/HandleDataFrontEnd.js";
import JSFormController from "./FormModule/Controller/JSFormController.js";

const jsFormController = new JSFormController;
const handleDataFrontEnd = new HandleDataFrontEnd(jsFormController);
handleDataFrontEnd.formsHandler();