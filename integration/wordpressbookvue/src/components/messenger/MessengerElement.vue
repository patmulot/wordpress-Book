<template>
  <div class="message_container">
    <!-- // ------------ MESSAGE HEADER ------------ // -->
    <div class="message_header">
      <div class="message_header-user_info">
        <div class="message_header-avatar-container">
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="message_window_header-avatar"
          />
        </div>
        <span class="message_header-user_name"> blible bleblu </span>
        <i class="fas fa-chevron-down message_header-user_icon"></i>
      </div>
      <div class="message_header-options-container">
        <div class="message_header-options_icon">
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="message_header-options_icon">
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="message_header-options_icon">
          <i class="fas fa-chevron-down"></i>
        </div>
        <div
          class="message_header-options_icon"
          @click="handleClickOnExitMessage"
        >
          <i class="fas fa-times"></i>
        </div>
      </div>
    </div>
    <!-- // ------------ MESSAGE CONTENT ------------ // -->
    <div class="messages_container">
      <!-- // friend message template ------------ // -->
      <div class="message_content friend-messages">
        <div
          class="friend-avatar-container"
          @mouseover="handleMouseoverOnMessage"
          @mouseleave="handleMouseleaveOnMessage"
        >
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="friend-avatar"
          />
        </div>
        <div class="message_list friend-message_list">
          <div
            class="one_message-container"
            @mouseover="handleMouseoverOnMessage"
            @mouseleave="handleMouseleaveOnMessage"
          >
            <p class="friend_message message">coucou</p>

            <div class="message-options">
              <div class="message-option-icon">
                <i class="far fa-smile option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-share option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-ellipsis-v option-icon"></i>
              </div>
            </div>
          </div>
          <div
            class="one_message-container"
            @mouseover="handleMouseoverOnMessage"
            @mouseleave="handleMouseleaveOnMessage"
          >
            <p class="friend_message message">Lorem, ipsum dolor.</p>
            <div class="message-options">
              <div class="message-option-icon">
                <i class="far fa-smile option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-share option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-ellipsis-v option-icon"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // user message template ------------ // -->
      <div class="message_content user-messages">
        <div class="message_list user-message_list">
          <!-- <userSingleMessageElement /> -->

          <div
            class="one_message-container one_message-user"
            @mouseover="handleMouseoverOnMessage"
            @mouseleave="handleMouseleaveOnMessage"
          >
            <div class="message-options">
              <div class="message-option-icon">
                <i class="fas fa-ellipsis-v option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-share option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="far fa-smile option-icon"></i>
              </div>
            </div>
            <p class="user_message message">coucou</p>
          </div>

          <div
            class="one_message-container one_message-user"
            @mouseover="handleMouseoverOnMessage"
            @mouseleave="handleMouseleaveOnMessage"
          >
            <div class="message-options">
              <div class="message-option-icon">
                <i class="fas fa-ellipsis-v option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-share option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="far fa-smile option-icon"></i>
              </div>
            </div>
            <p class="user_message message">Lorem ipsum dolor sit amet.</p>
          </div>

          <div
            class="one_message-container one_message-user"
            @mouseover="handleMouseoverOnMessage"
            @mouseleave="handleMouseleaveOnMessage"
          >
            <div class="message-options">
              <div class="message-option-icon">
                <i class="fas fa-ellipsis-v option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="fas fa-share option-icon"></i>
              </div>
              <div class="message-option-icon">
                <i class="far fa-smile option-icon"></i>
              </div>
            </div>
            <p class="user_message message">
              Lorem, ipsum. Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Fuga aperiam ipsa nemo voluptatum eos recusandae.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- // ------------ MESSAGE FOOTER ------------ // -->

    <form class="messages_footer" action="" @submit="handleSubmitMessage">
      <div class="featured_options-icons">
        <i class="fas fa-plus-circle option-icon"></i>
      </div>
      <div class="featured_options-icons">
        <i class="fas fa-photo-video option-icon"></i>
      </div>
      <div class="featured_options-icons">
        <i class="far fa-sticky-note option-icon"></i>
      </div>
      <div class="featured_options-icons gif-option_icon">
        <span class="gif_icon option-icon">GIF</span>
      </div>
      <div class="messages_footer-input-container">
        <input
          name="content"
          type="text"
          placeholder="Aa"
          class="messages_input"
          @keyup="handleMessageInput"
          @blur="handleBlurOnInputPostForm"
          v-model="messageContent"
        />
        <div class="messages_emote-container">
          <i class="fas fa-smile option-icon"></i>
        </div>
      </div>
      <div
        class="featured_options-icons thumbs-up"
        @click="handleSendMessage"
      >
        <i class="fas fa-thumbs-up option-icon"></i>
      </div>
      <div
        class="featured_options-icons paper-plane"
        @click="handleSubmitMessage"
      >
        <i class="fas fa-paper-plane option-icon"></i>
      </div>
    </form>
  </div>
</template>

<script>
import messengerService from "../../services/messengerService";
// import userSingleMessageElement from "@/components/messenger/UserSingleMessageElement.vue";
export default {
  name: "MessengerElement",
  components: {
    // userSingleMessageElement,
  },
  data() {
    return {
      senderId: 1, //! test with default value to change
      recipientId: 1, //! test with default value to change
      messageContent: "",
    };
  },
  methods: {
    handleClickOnExitMessage: function (evt) {
      evt.preventDefault();
      let currentMessagingWindow =
        evt.currentTarget.closest(".message_container");
      currentMessagingWindow.style.display = "none";
      console.log(currentMessagingWindow);
    },
    handleMouseoverOnMessage: function (evt) {
      evt.preventDefault();
      let optionsElementToDisplay =
        evt.currentTarget.querySelector(".message-options");
      optionsElementToDisplay.style.visibility = "visible";
    },
    handleMouseleaveOnMessage: function (evt) {
      evt.preventDefault();
      let optionsElementToDisplay =
        evt.currentTarget.querySelector(".message-options");
        if(optionsElementToDisplay) {
          optionsElementToDisplay.style.visibility = "hidden";
        }
    },
    // ==================================== //
    // ============ MESSAGING ============ //
    // ================================== //
    handleMessageInput(evt) {
      evt.preventDefault();
      // console.log(evt);
      // console.log(evt.currentTarget);
      let sendLikeIcon = evt.currentTarget
        .closest(".messages_footer")
        .querySelector(".thumbs-up");
      // console.log(sendLikeIcon);
      let sendMessageIcon = evt.currentTarget
        .closest(".messages_footer")
        .querySelector(".paper-plane");
      // console.log(sendMessageIcon);
      sendLikeIcon.style.display = "none";
      sendMessageIcon.style.display = "flex";
      if (evt.currentTarget.value == "") {
        sendLikeIcon.style.display = "flex";
        sendMessageIcon.style.display = "none";
      }
      // if (evt.key == "Enter") {
      //   this.handleSubmitMessage();
      // }
    },
    async handleSubmitMessage(evt) {
      evt.preventDefault();
      const result = await messengerService.saveMessage(
        this.senderId,
        this.recipientId,
        this.messageContent
      );
      if (result) {
        this.createdFail = false;
      } else {
        this.createdFail = true;
      }
      // reload : ---------------- //
      // reload : ---------------- //
      // reload : ---------------- //
      // reload : ---------------- //
      // reload : ---------------- //
    },
  },
};
</script>
<style scoped lang="scss">
@import "../../assets/scss/main.scss";
.message_container {
  display: flex;
  flex-direction: column;
  height: 26rem;
  width: 20rem;
  background-color: $firstBackgroundColor;
  margin: 0 0.6rem;
  border-radius: 0.8rem;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
  // ------------ MESSAGES HEADER ------------ //
  .message_header {
    width: 100%;
    @include flex-spaceB-center;
    color: $mainFontColor1;
    border-bottom: solid 1px $secondBackgroundColor;
    .message_header-user_info {
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      padding: 0.6rem;
      .message_header-avatar-container {
        height: 2rem;
        width: 2rem;
        .message_window_header-avatar {
          height: 100%;
          width: 100%;
          border-radius: 50%;
        }
      }
      .message_header-user_name {
        padding: 0 0.6rem;
      }
    }
    .message_header-user_info:hover {
      border-top-left-radius: 0.8rem;
      background-color: $secondBackgroundColor;
      cursor: pointer;
    }
    .message_header-options-container {
      display: flex;
      align-items: center;
      margin-right: 0.6rem;
      .message_header-options_icon {
        @include flex-center-center;
        height: 1rem;
        width: 1rem;
        padding: 0.2rem;
        border-radius: 50%;
      }
      .message_header-options_icon:hover {
        cursor: pointer;
        background-color: $thirdBackgroundColor;
      }
    }
  }
  // ------------ MESSAGES CONTENT ------------ //
  .messages_container {
    display: flex;
    flex-grow: 2;
    flex-direction: column;
    overflow: auto;
    padding: 0 0.4rem;
    .friend-messages {
      justify-content: flex-start;
    }
    .user-messages {
      display: flex;
      justify-content: flex-end;
    }
    .message_content {
      width: 100%;
      display: flex;
      align-items: flex-end;
      .friend-avatar-container {
        height: 2rem;
        width: 2rem;
        margin: 0.2rem 0;
        .friend-avatar {
          height: 100%;
          width: 100%;
          border-radius: 50%;
        }
      }
      .user-message_list {
        align-items: flex-end;
      }
      .message_list {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin: 0.1rem 0;

        .one_message-container {
          width: 100%;
          display: flex;
          align-items: center;
          .message {
            margin: 0.1rem 0;
            padding: 0.6rem;
            border-radius: 1rem;
            color: $mainFontColor3;
            font-weight: 500;
          }
          .user_message {
            background-color: $lightBlueColor2;
            display: flex;
            align-self: flex-end;
          }
          .friend_message {
            background-color: $secondBackgroundColor;
          }
          .message-options {
            visibility: hidden;
            display: flex;
            min-width: 3.9rem;
            max-width: 3.9rem;
            justify-content: space-between;
            margin: 0.3rem;
            .message-option-icon {
              @include flex-center-center;
              height: 1.3rem;
              width: 1.3rem;
              border-radius: 50%;
              margin: 0.05rem;
            }
            .message-option-icon:hover {
              background-color: $secondBackgroundColor;
              cursor: pointer;
            }
          }
        }
        .one_message-user {
          justify-content: flex-end;
        }
      }
    }
  }
  // ------------ MESSAGES FOOTER ------------ //
  .messages_footer {
    @include flex-spaceB-center;
    padding: 0.6rem 0.4rem;
    .featured_options-icons {
      @include flex-center-center;
      height: 1.8rem;
      width: 1.8rem;
      border-radius: 50%;
      color: $thirdBackgroundColor;
      font-size: 1.15rem;
      .gif_icon {
        font-size: 0.7rem;
        font-weight: bold;
        line-height: 0;
        padding: 0.6rem 0.15rem;
        border-radius: 0.4rem;
        color: $firstBackgroundColor;
        background-color: $thirdBackgroundColor;
      }
    }
    .paper-plane {
      display: none;
    }
    .featured_options-icons:hover {
      background-color: $secondBackgroundColor;
      cursor: pointer;
    }
    .messages_footer-input-container {
      @include flex-spaceB-center;
      // height: 1.6rem;
      color: $mainFontColor2;
      background-color: $secondBackgroundColor;
      border-radius: 1.2rem;
      .messages_input {
        width: 6rem;
        background-color: transparent;
        border: none;
        padding-left: 0.6rem;
        font-size: 1.1rem;
        color: $mainFontColor1;
      }
      .messages_input:focus {
        outline: none !important;
      }
      .messages_emote-container {
        @include flex-center-center;
        height: 2.25rem;
        width: 2.25rem;
        border-radius: 50%;
        font-size: 1.3rem;
      }
      .messages_emote-container:hover {
        background-color: $thirdBackgroundColor;
        cursor: pointer;
      }
    }
  }
}
</style>
