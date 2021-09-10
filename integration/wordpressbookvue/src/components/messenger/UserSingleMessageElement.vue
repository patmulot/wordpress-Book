<template>
  <p class="friend_message message">coucou</p>
</template>

<script>
// import newStoryElement from '@/components/stories/NewStoryElement.vue'
export default {
  name: "UserSingleMessageElement",
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
      optionsElementToDisplay.style.visibility = "hidden";
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
      height: 1rem;
      width: 1rem;
      border-radius: 50%;
      color: $thirdBackgroundColor;
      font-size: 1.15rem;
      padding: 0.4rem;
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
