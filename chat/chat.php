<input type="text" class="d-none" id="ID_LOGIN">
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
    <div class="chat-area h-100"></div>
    <!-- chat box -->
    <div class="chat-box">
        <input id="inputMessage" class="form-control" type="text">
        <i onclick="sendMessage()" class="send fa-solid fa-paper-plane"></i>
    </div>
</div>

<script>
    const conversation = document.querySelector('.conversation');
    const inputMessage = document.querySelector('#inputMessage');
    const chatArea = document.querySelector('.chat-area');
    const ID_LOGIN = document.querySelector('#ID_LOGIN');
    getUserLogin();

    let interval = setInterval(() => {
        getChat();
    }, 100);

    chatArea.onmouseenter = () => {
        chatArea.classList.add("active");
    }

    chatArea.onmouseleave = () => {
        chatArea.classList.remove("active");
    }

    inputMessage.onkeyup = (e) => {
        e.preventDefault();
        if (e.keyCode === 13) {
            sendMessage();
        }
    }

    function showChat() {
        conversation.classList.remove('d-none');
    }

    function closeChat() {
        conversation.classList.add('d-none');
    }

    function getUserLogin() {
        if (localStorage.getItem("telegram_id")) {
            axios.get("admin/ajax/customer.php?action=select&table=customer&column=*&condition= WHERE telegram_id=" + localStorage.getItem("telegram_id")).then(res => {
                const data = res.data[0];
                ID_LOGIN.value = data.id;
            }).catch(err => {
                console.log(err);
            })
        } else if (localStorage.getItem("token")) {
            axios.get("admin/ajax/customer.php?action=verifyToken&token=" + localStorage.getItem("token")).then(res => {
                const data = res.data[0];
                ID_LOGIN.value = data.id;
            }).catch(err => {
                console.log(err);
            })
        } else if (sessionStorage.getItem('email')) {
            axios.get(`admin/ajax/customer.php?action=select&table=customer&column=*&condition= WHERE email='${sessionStorage.getItem("email")}'`).then(res => {
                const data = res.data[0];
                ID_LOGIN.value = data.id;
            }).catch(err => {
                console.log(err);
            })
        }
    }

    function getChat() {
        if (ID_LOGIN.value != "") {
            axios.get('admin/ajax/chat.php?action=get-chat&cus_id=' + ID_LOGIN.value).then(res => {
                const chat = res.data;
                if (chat != "") {
                    chatArea.innerHTML = chat;
                    if(!chatArea.classList.contains("active")){
                        chatArea.scrollTop = chatArea.scrollHeight;
                    }
                } else {
                    chatArea.innerHTML = '<div class="w-100 h-100 d-flex justify-content-center align-items-center text-center">No message are available. Once you send message they wil appear here.</div>';
                }
            }).catch(err => {
                console.log(err);
            });
        } else {
            chatArea.innerHTML = '<div class="w-100 h-100 d-flex justify-content-center align-items-center text-center">No message are available. Once you send message they wil appear here.</div>';
        }
    }

    function sendMessage() {
        const cus_id = ID_LOGIN.value;
        if (inputMessage.value == "") return;
        if (cus_id == "") return Swal.fire({
            toast: true,
            position: 'top',
            showClass: {
                icon: 'animated heartBeat delay-1s'
            },
            icon: 'error',
            text: 'Please register an account',
            showConfirmButton: false,
            timer: 1000
        });
        const formData = new FormData();
        formData.append("cus_id", cus_id);
        formData.append("message", inputMessage.value);
        formData.append("sender", 0);
        axios.post("admin/ajax/chat.php?action=insert", formData).then(res => {}).catch(err => {
            console.log(err);
        });
        inputMessage.value = "";
        chatArea.scrollTop = chatArea.scrollHeight;
    }
</script>