@extends('layouts.people')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <section class="msger">
                <header class="msger-header">
                    <div class="msger-header-title">
                        <i class="fas fa-comment-alt"></i> Clasez-Chat
                    </div>
                    <div class="msger-header-options">
                        <span><i class="fas fa-cog"></i></span>
                    </div>
                </header>
            
                <main class="msger-chat">
                    <div class="msg left-msg">
                        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>
            
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Thoriq</div>
                                <div class="msg-info-time">12:45</div>
                            </div>
            
                            <div class="msg-text">
                                Haiiii. 😄
                            </div>
                        </div>
                    </div>
            
                    <div class="msg right-msg">
                        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>
            
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">Dawas</div>
                                <div class="msg-info-time">12:46</div>
                            </div>
            
                            <div class="msg-text">
                                uyyyy!!!!
                            </div>
                        </div>
                    </div>
                </main>
            
                <form class="msger-inputarea">
                    <input type="text" class="msger-input" placeholder="Enter your message...">
                    <button type="submit" class="msger-send-btn">Send</button>
                </form>
            </section>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    const msgerForm = get(".msger-inputarea");
    const msgerInput = get(".msger-input");
    const msgerChat = get(".msger-chat");

    const BOT_MSGS = [
        "Hi, how are you?",
        "Ohh... I can't understand what you trying to say. Sorry!",
        "I like to play games... But I don't know how to play!",
        "Sorry if my answers are not relevant. :))",
        "I feel sleepy! :("
    ];

    // Icons made by Freepik from www.flaticon.com
    const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
    const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
    const BOT_NAME = "BOT";
    const PERSON_NAME = "Sajad";

    msgerForm.addEventListener("submit", event => {
        event.preventDefault();

        const msgText = msgerInput.value;
        if (!msgText) return;

        appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
        msgerInput.value = "";

        botResponse();
    });

    function appendMessage(name, img, side, text) {
        //   Simple solution for small apps
        const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

        msgerChat.insertAdjacentHTML("beforeend", msgHTML);
        msgerChat.scrollTop += 500;
    }

    function botResponse() {
        const r = random(0, BOT_MSGS.length - 1);
        const msgText = BOT_MSGS[r];
        const delay = msgText.split(" ").length * 100;

        setTimeout(() => {
            appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
        }, delay);
    }

    // Utils
    function get(selector, root = document) {
        return root.querySelector(selector);
    }

    function formatDate(date) {
        const h = "0" + date.getHours();
        const m = "0" + date.getMinutes();

        return `${h.slice(-2)}:${m.slice(-2)}`;
    }

    function random(min, max) {
        return Math.floor(Math.random() * (max - min) + min);
    }
</script>
@endsection