class SwopDataService{

    async sendData(data) {
        
        let response = await fetch('http://localhost/index.php', {
            method: 'POST',
            body: JSON.stringify(data)
        });
        
        return await response.json();
    }

    async getData() {
        
        let response = await fetch('http://localhost/startpage.php', {
            method: 'POST',
            body:JSON.stringify({'data': 'help'})
        });
        
        return await response.json();
    }
}

export default SwopDataService