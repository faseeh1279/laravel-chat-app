import './echo';
import axios from 'axios';

window.Echo.channel('chat')
    .listen('.message.sent', (event) => {

        const messagesDiv =
            document.getElementById('messages');

        messagesDiv.innerHTML += `
            <p>
                <strong>${event.message.user.name}</strong>:
                ${event.message.message}
            </p>
        `;
    });

window.sendMessage = function () {

    const message =
        document.getElementById('message').value;

    axios.post('/send-message', {
        message
    })
    .then(response => {

        console.log('Message sent:', response.data);

    })
    .catch(error => {

        console.error(
            'Failed to send message:',
            error
        );

    });
};