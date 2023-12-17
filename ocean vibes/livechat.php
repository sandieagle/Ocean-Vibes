<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Live Chat</title>
  <style>
    #chat-container {
      width: 400px;
      margin: 20px auto;
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
      font-family: Arial, sans-serif;
    }
    .message {
      margin-bottom: 10px;
      font-weight: bold;
    }
    #message-input {
      width: calc(100% - 20px);
      padding: 5px;
    }
    .b1{
    background-color:black;
    border: solid white 1px;
    border-radius: 5px;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
    }
    body{
      background-image: url('social-media-sketch-vector-seamless-600nw-1660950727.webp');
    }
  </style>
</head>
<body>
  <p align="right">    <a href="contact.php" class="b1"><b>BACK</b></a></p>
  <br><br><br><br>
  <div id="chat-container">
    <div id="chat-messages"></div>
    <input type="text" id="message-input" placeholder="Type a message..."><br>
    <button onclick="sendMessage()">Send</button>
  </div>

  <script>
    function sendMessage() {
      const messageInput = document.getElementById('message-input');
      const message = messageInput.value;
      if (message.trim() !== '') {
        displayMessage(message);
        messageInput.value = ''; // Clear input after sending
      }
    }

    function displayMessage(message) {
      const chatMessages = document.getElementById('chat-messages');
      const messageDiv = document.createElement('div');
      messageDiv.classList.add('message');
      messageDiv.textContent = message;
      chatMessages.appendChild(messageDiv);
    }
  </script>
</body>
</html>