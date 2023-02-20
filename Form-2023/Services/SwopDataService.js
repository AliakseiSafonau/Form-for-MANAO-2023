class SwopDataService{

    async sendData(data) {
        console.log(data);
        let response = await fetch('http://localhost/answer.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        
        return await response.json();
    }
}

export default SwopDataService