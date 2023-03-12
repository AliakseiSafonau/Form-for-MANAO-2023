import SwopDataService from './Services/SwopDataService.js';

document.getElementsByClassName('cleanCookie')[0].addEventListener('click', function(event) {
    const swopDataService = new SwopDataService();
    swopDataService.getData().then(data => {
        if (data['result'] === 'exit') {
            window.location = '/';
        };
    })
})