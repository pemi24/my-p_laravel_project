<!DOCTYPE html>
<html>
<head>
  <title>WhatsApp Message View</title>
  <style>
    /* Styles for the message view */
    .message-view {
      width: 400px;
      height: 600px;
      border: 1px solid #ccc;
      overflow-y: scroll;
      padding: 10px;
      margin: 20px;
    }
    .message {
      background-color: #f0f0f0;
      padding: 5px;
      margin-bottom: 10px;
    }
    .message .sender {
      font-weight: bold;
    }
    .message .content {
      margin-top: 5px;
    }
    .input-area {
      margin-top: 10px;
    }
    .input-area textarea {
      width: 100%;
      height: 80px;
      padding: 5px;
    }
    .input-area button {
      margin-top: 5px;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="message-view" id="messageView">
    <div class="message">
      <div class="sender">John Doe:</div>
      <div class="content">Hello, how are you?</div>
    </div>
    <div class="message">
      <div class="sender">Jane Smith:</div>
      <div class="content">I'm doing great, thanks!</div>
    </div>
    <!-- More messages here -->
  </div>
  <div class="input-area">
    <textarea id="messageInput" placeholder="Type your message"></textarea>
    <button onclick="sendMessage()">Send</button>
  </div>

  <script>
    function sendMessage() {
      var messageInput = document.getElementById('messageInput');
      var messageView = document.getElementById('messageView');
      var message = messageInput.value.trim();

      if (message !== '') {
        var newMessage = document.createElement('div');
        newMessage.classList.add('message');
        newMessage.innerHTML = '<div class="sender">You:</div><div class="content">' + message + '</div>';
        messageView.appendChild(newMessage);
        messageInput.value = '';
        messageView.scrollTop = messageView.scrollHeight;
      }
    }
  </script>
</body>
</html>
