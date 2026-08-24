<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chat</title>

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
</head>

<body>

<div id="chat-container">

    <div id="messages"></div>

    <input
        type="text"
        id="username"
        placeholder="Your name"
    />

    <textarea
        id="message"
        placeholder="Type a message"
    ></textarea>

    <button onclick="sendMessage()">
        Send
    </button>

</div>

@vite(['resources/js/app.js'])

</body>
</html>