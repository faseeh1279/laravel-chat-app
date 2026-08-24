const sendMessage = async () => {
    const response = await fetch('http://localhost:8000/messages', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify({
            body: message,
        }),
    });

    const data = await response.json();

    console.log(data);
};