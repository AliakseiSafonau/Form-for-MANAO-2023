import SwopDataService from '../../Services/SwopDataService.js'

class JSFormController {
    async dataCollect(data) {
        let swopDataService = new SwopDataService();
        return await swopDataService.sendData(data);
    }
}

export default JSFormController