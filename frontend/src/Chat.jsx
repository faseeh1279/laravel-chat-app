import { useState } from 'react';

function Chat() {
    const [message, setMessage] = useState('');

    const sendMessage = async () => {
        if (!message.trim()) {
            return;
        }

        // Send to Laravel
        await fetch('http://localhost:8000/api/messages', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                body: message,
            }),
        });

        setMessage('');
    };

    return (
        <div>
            <input
                type="text"
                value={message}
                onChange={(e) => setMessage(e.target.value)}
                placeholder="Type a message..."
            />

            <button onClick={sendMessage}>
                Send
            </button>
        </div>
    );
}

export default Chat;