const messageContainer = document.getElementById('message-container');
if (messageContainer) {
    setTimeout(function () {
        messageContainer.style.opacity = 1;
    }, 200);
}

setTimeout(function () {
    messageContainer.style.opacity = 0;
}, 3000);