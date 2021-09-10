<template>
  <div>
    <section class="right_side_container fixed">
<!-- // -------------- CONTACT SECTION -------------- // -->
      <div class="messenger_section-container">
        <ul class="messenger_section-content">
          <li class="usual_link-item">
            <span class="messenger_section-group_messages"> Contacts </span>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li
            class="usual_link-item"
            @mouseover="handleMouseoverOnProfile"
            @mouseleave="handleMouseleaveOnProfile"
            @click="handleClickOnProfile"
          >
            <profileThumbnail />
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
        </ul>
      </div>
<!-- // -------------- GROUP SECTION -------------- // -->
      <div class="messenger_section-container">
        <ul class="messenger_section-content">
          <li class="usual_link-item">
            <span class="messenger_section-group_messages">
              Conversations de groupe
            </span>
          </li>
          <li class="usual_link-item">
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li class="usual_link-item">
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li class="usual_link-item">
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
          <li class="usual_link-item">
            <div href="" class="usual_link usual_link-user_profile">
              <img
                src="https://picsum.photos/200/300"
                alt=""
                class="messenger_friend-image usual_link-icon"
              />
              <span>Lorem, ipsum.</span>
            </div>
          </li>
        </ul>
      </div>
<!-- // -------------- MESSAGING SHORTCUTS -------------- // -->
      <div class="messenging_shortcuts-container">
        <div
          class="messenging_shortcuts-img-container"
          @click="handleClickOnShortcuts"
        >
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="messenging_shortcuts-img"
          />
        </div>
        <div
          class="messenging_shortcuts-img-container"
          @click="handleClickOnShortcuts"
        >
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="messenging_shortcuts-img"
          />
        </div>
        <div
          class="messenging_shortcuts-img-container"
          @click="handleClickOnShortcuts"
        >
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="messenging_shortcuts-img"
          />
        </div>
        <div
          class="messenging_shortcuts-img-container"
          @click="handleClickOnShortcuts"
        >
          <img
            src="https://source.unsplash.com/random"
            alt=""
            class="messenging_shortcuts-img"
          />
        </div>
      </div>
    </section>

    <!-- <div class="right_side-background_filter"></div> -->
    <section class="right_side_container"></section>
    <mainFooter />
  </div>
</template>

<script>
import mainFooter from "./MainFooter.vue";
import profileThumbnail from "../components/profile/ProfileThumbnail.vue";
export default {
  name: "RightSideHomeSection",
  components: {
    mainFooter,
    profileThumbnail,
  },
  methods: {
    handleMouseoverOnProfile: function (evt) {
      evt.preventDefault();
      let thumbnailToDisplay = evt.currentTarget.querySelector(
        ".user_profile-thumbnail-container"
      );
      setTimeout(function () {
        thumbnailToDisplay.style.display = "block";
      }, 500);
    },
    handleMouseleaveOnProfile: function (evt) {
      evt.preventDefault();
      let thumbnailToDisplay = evt.currentTarget.querySelector(
        ".user_profile-thumbnail-container"
      );
      setTimeout(function () {
        thumbnailToDisplay.style.display = "none";
      }, 500);
    },
    handleClickOnProfile: function (evt) {
      evt.preventDefault();
    },
    // --------- MESSAGING SHORTCUTS ------------ //
    handleClickOnShortcuts: function (evt) {
      evt.preventDefault();
      console.log("click on shortcut");
    },
  },
};
</script>
<style scoped lang="scss">
@import "../assets/scss/main.scss";
.fixed {
  position: fixed;
  top: 4rem;
  background-color: none;
  // overflow: auto; //! fait passer les thumbnail derrière les publications
  // ------- MESSAGING SHORTCUTS ----------- //
  .messenging_shortcuts-container {
    height: $shortcutsContainerHeight;
    position: absolute;
    top: $shortcutsContainerTopPos; // 100v - 4rem for header height - 21rem for shortcuts container max height
    right: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-end;
    .messenging_shortcuts-img-container {
      height: 2.5rem;
      width: 2.5rem;
      padding: 0.5rem;
      .messenging_shortcuts-img {
        height: 100%;
        width: 100%;
        border-radius: 50%;
      }
    }
    .messenging_shortcuts-img-container :hover {
        background-color: $secondBackgroundColor;
        cursor: pointer;
    }
  }
}
// .right_side-background_filter {
//   height: 100%;
//   width: 100%;
//   background-color: rgba(0, 0, 0, 0.3);
//   position: absolute;
// }
.right_side_container {
  width: 30vw;
  max-width: 300px;
  height: 100%;
  background-color: $mainBackgroundColor;
  ul {
    display: flex;
    flex-direction: column;
    margin: 0 1rem;
    border-bottom: solid 1px $thirdBackgroundColor;
    li {
      height: 2.6rem;
      padding: 0.4rem;
      border-radius: 0.4rem;
      display: flex;
      align-items: center;
      margin-right: 1rem;
      .messenger_friend-image {
        height: 2rem;
        width: 2rem;
        border-radius: 1rem;
      }
      .usual_link {
        display: flex;
        align-items: center;
        color: $mainFontColor2;
        span {
          display: block;
          padding-left: 0.6rem;
          color: $mainFontColor1;
          font-weight: bold;
        }
      }
      .messenger_section-group_messages {
        font-size: 1.1rem;
        font-weight: bold;
      }
    }
    li:hover {
      background-color: $fourthBackgroundColor;
    }
    .usual_link-arrow {
      background-color: $secondBackgroundColor;
      border-radius: 1rem;
    }
    .usual_link-arrow-icon {
      text-align: center;
      width: 2rem;
    }
    .usual_link-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 2rem;
      height: 2rem;
    }
  }
}
</style>
