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
<h2>
    Welcome, {{ auth()->user()->name }}
</h2>

<p>
    Logged in as:
    {{ auth()->user()->email }}
</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit">
        Logout
    </button>
</form>
<div id="chat-container">

    <div id="messages"></div>

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