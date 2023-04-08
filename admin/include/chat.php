<?php
require_once "lib/database.php";
$result = Database::select("customer", "*", "", "");
?>

<div class="content">
    <div class="chat d-flex phoenix-offcanvas-container pt-1 mt-n1 mb-9">
        <div class="card p-3 p-xl-1 mt-xl-n1 chat-sidebar me-3 phoenix-offcanvas phoenix-offcanvas-start" id="chat-sidebar"><button class="btn d-none d-sm-block d-xl-none mb-2" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span class="fa-solid fa-magnifying-glass text-600 fs-1"></span></button>
            <div class="form-icon-container mb-4 d-sm-none d-xl-block"><input class="form-control form-icon-input" type="text" placeholder="People, Groups and Messages" /><span class="fas fa-user text-900 fs--1 form-icon"></span></div>

            <div class="customer scrollbar">
                <?php $index = -1;
                foreach ($result as $item) {
                    $index++; ?>
                    <div class="tab-content" id="contactListTabContent">
                        <div data-chat-thread-tab-content="data-chat-thread-tab-content">
                            <ul class="nav chat-thread-tab flex-column list">
                                <li class="nav-item rounded read cursor-pointer customer-item" onclick="getChat(<?= $item['id'] ?>, '<?= $item['name'] ?>', <?= $index ?>)" role="presentation">
                                    <a class="nav-link d-flex align-items-center justify-content-center p-2">
                                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2">
                                            <img class="rounded-circle border border-2 border-white" src="<?= $item['type'] == 'normal' ? 'uploads/customer/' . $item['image'] : $item['image'] ?>" alt="" />
                                        </div>
                                        <div class="flex-1 d-sm-none d-xl-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="text-900 fw-normal name text-nowrap"><?= $item['name'] ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="chat-content tab-content flex-1">
            <div class="tab-pane h-100 fade active show" role="tabpanel">
                <div class="empty card flex-1 h-100 phoenix-offcanvas-container d-flex justify-content-center text-center">
                    No message are available. Once you send message they wil appear here.
                </div>
                <div class="card flex-1 h-100 phoenix-offcanvas-container">
                    <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column flex-md-row align-items-md-center">
                                <div class="btn fs-1 fw-semi-bold text-1100 d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0">
                                    <span class="line-clamp-1 nameChat">Sharuka Nijibum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body chat-area p-3 p-sm-4 d-flex flex-column scrollbar">
                        <!-- <div class="d-flex chat-message">
                            <div class="d-flex mb-2 flex-1">
                                <div class="w-100 w-xxl-75">
                                    <div class="d-flex hover-actions-trigger">
                                        <div class="avatar avatar-m me-3 flex-shrink-0">
                                            <img class="rounded-circle" src="../assets/img/team/20.png" alt="" />
                                        </div>
                                        <div class="chat-message-content received me-2">
                                            <div class="mb-1 received-message-content border rounded-2 p-3">
                                                <p class="mb-0">Peter Piper picked a peck of pickled peppers. A peck of pickled peppers Peter Piper picked.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex chat-message">
                            <div class="d-flex mb-2 justify-content-end flex-1">
                                <div class="w-100 w-xxl-75">
                                    <div class="d-flex flex-end-center hover-actions-trigger">
                                        <div class="chat-message-content me-2">
                                            <div class="mb-1 sent-message-content light bg-primary rounded-2 p-3 text-white">
                                                <p class="mb-0">If Peter Piper picked a peck of pickled peppers, where’s the peck of pickled peppers Peter Piper picked?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-footer">
                        <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <button class="btn btn-link py-0 ps-0 pe-2 text-900 fs--1 btn-emoji">
                                    <span class="fa-regular fa-face-smile"></span>
                                </button>
                                <label class="btn btn-link py-0 px-2 text-900 fs--1" for="chatPhotos-0">
                                    <span class="fa-solid fa-image"></span>
                                </label>
                                <input class="d-none" type="file" accept="image/*" id="chatPhotos-0" />
                                <label class="btn btn-link py-0 px-2 text-900 fs--1" for="chatAttachment-0">
                                    <span class="fa-solid fa-paperclip"></span>
                                </label>
                                <input class="d-none" type="file" id="chatAttachment-0" />
                                <button class="btn btn-link py-0 px-2 text-900 fs--1">
                                    <span class="fa-solid fa-microphone"></span>
                                </button>
                                <button class="btn btn-link py-0 px-2 text-900 fs--1">
                                    <span class="fa-solid fa-ellipsis"></span>
                                </button>
                            </div>
                            <div>
                                <button onclick="sendMessage()" class="btn btn-primary fs--2" type="button">Send
                                    <span class="fa-solid fa-paper-plane ms-1"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="data-phoenix-backdrop" style="top: 0;"></div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15">
                    <div class="modal-body p-0">
                        <div class="chat-search-box">
                            <div class="form-icon-container"><input class="form-control py-3 form-icon-input" type="text" autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span class="fa-solid fa-magnifying-glass fs--1 form-icon"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Bazaar Shop Cambodia<span class="d-none d-sm-inline-block"></span>
                </p>
            </div>
        </div>
    </footer>
</div>
<script>
    const chatArea = document.querySelector('.chat-area');
    let sendTo = 0;
    let interval = setInterval(() => {
        console.log('starts')
    }, 100);

    chatArea.onmouseenter = () => {
        chatArea.classList.add("active");
    }

    chatArea.onmouseleave = () => {
        chatArea.classList.remove("active");
    }

    function getChat(id, name, index) {
        setSelect(index); sendTo = id;
        document.querySelector('.empty').classList.add('d-none');
        document.querySelector('.nameChat').innerHTML = name;

        clearInterval(interval);
        interval = setInterval(() => {
            axios.get('ajax/chat.php?action=get-chat-admin&cus_id=' + id).then(res => {
                const chat = res.data;
                if (chat != "") {
                    chatArea.innerHTML = chat;
                    if (!chatArea.classList.contains("active")) {
                        chatArea.scrollTop = chatArea.scrollHeight;
                    }
                } else {
                    chatArea.innerHTML = '<div class="w-100 h-100 d-flex justify-content-center align-items-center text-center">No message are available. Once you send message they wil appear here.</div>';
                }
            }).catch(err => {
                console.log(err);
            });
        }, 100);
    }

    function setSelect(index) {
        const customerItems = document.querySelectorAll('.customer-item');
        for (let i = 0; i < customerItems.length; i++) {
            const customer = customerItems[i];
            if (i == index) {
                customer.classList.add('active');
                customer.classList.add('border');
            } else {
                customer.classList.remove('active');
                customer.classList.remove('border');
            }
        }
    }

    function sendMessage() {
        const message = document.querySelector('.chat-textarea').textContent;
        if (message.value == "") return;
        const formData = new FormData();
        formData.append("cus_id", sendTo);
        formData.append("message", message);
        formData.append("sender", 1);
        axios.post("ajax/chat.php?action=insert", formData).then(res => {}).catch(err => {
            console.log(err);
        });
        document.querySelector('.chat-textarea').textContent = "";
        document.querySelector('.chat-textarea').focus();
        chatArea.scrollTop = chatArea.scrollHeight;
    }
</script>