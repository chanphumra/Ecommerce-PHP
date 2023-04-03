<div onclick="showChat()" class="bg-primary cursor-pointer chat"><i class="fa-solid fa-message"></i></div>
<div class="d-none conversation card shodow-sm">
    <!-- header -->
    <div class="chat-header">
        <div class="profile">
            <img src="" alt="">
            <div>Bazaar shop cambodia</div>
        </div>
        <i onclick="closeChat()" class="close-chat fas fa-xmark cursor-pointer"></i>
    </div>
    <!-- chat area -->
    <div class="chat-area h-100">
        <div class="chat-item reciever">
            <img src="" alt="">
            <div class="card bg-primary text-white shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item sender">
            <div class="card bg-white text-black shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item reciever">
            <img src="" alt="">
            <div class="card bg-primary text-white shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item sender">
            <div class="card bg-white text-black shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item reciever">
            <img src="" alt="">
            <div class="card bg-primary text-white shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item sender">
            <div class="card bg-white text-black shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item reciever">
            <img src="" alt="">
            <div class="card bg-primary text-white shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item sender">
            <div class="card bg-white text-black shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item reciever">
            <img src="" alt="">
            <div class="card bg-primary text-white shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
        <div class="chat-item sender">
            <div class="card bg-white text-black shadow-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</div>
        </div>
    </div>
    <!-- chat box -->
    <div class="chat-box">
        <input id="message" class="form-control" type="text">
        <i onclick="sendMessage()" class="send fa-solid fa-paper-plane"></i>
    </div>
</div>

<script>
    const conversation = document.querySelector('.conversation');
    const message = document.querySelector('#message');
    function showChat() {
        conversation.classList.remove('d-none');
    }
    function closeChat() {
        conversation.classList.add('d-none');
    }
    function sendMessage() {
        alert(message.value);
    }

</script>