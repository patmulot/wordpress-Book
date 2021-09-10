<template>
  <div class="story-thumbnail" :style="bgImg">
    <a href="" class="story-thumbnail-link">
      <!-- <div
        class="new_story-user_img-container"
        :style="bgImg"
        @mouseover="thumbnailImgZoom"
      > -->
      <div class="new_story-user_img-container">
        <!-- <img :src="profileImageURL" alt="" class="new_story-user_img" /> -->
      </div>
      <div class="bottom-new_story-container">
        <div class="new_story_icon-container">
          <i class="fas fa-plus-circle new_story-icon"></i>
        </div>
        <span>Créer une story</span>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: "NewStoryElement",
  props: {
    profileImageURL: {
      type: String,
      default:
        "https://www.vhv.rs/dpng/d/505-5056056_best-free-futurama-png-image-without-background-bender.png",
    },
  },
  data() {
    return {
      bgImg: {
        backgroundImage: "url(" + this.profileImageURL + ")",
      },
    };
  },
  methods: {
    thumbnailImgZoom(evt) {
      console.log(evt.currentTarget.style.backgroundColor);
      evt.currentTarget.style.backgroundColor = "red;";
      console.log(evt.currentTarget.style.backgroundColor);
    },
  },
};
</script>
<style scoped lang="scss">
@import "../../assets/scss/main.scss";
.story-thumbnail {
  width: 20%;
  height: 100%;
  margin: 0 0.2rem;
  border-radius: 0.8rem;
  background-color: $firstBackgroundColor;
  background-size: auto 85%;
  background-repeat: no-repeat;
  background-position: center;
  background-color: $firstBackgroundColor;
  transition-duration: 500ms;
  .story-thumbnail-link {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    // justify-content: space-between;
    justify-content: flex-end;
    // A VOIR ----------------------------------- //
    // .new_story-user_img-container {
    //   height: 100%;
    //   width: 100%;
    //   background-size: 100%;
    //   background-repeat: no-repeat;
    //   background-position: center;
    //   border-top-left-radius: 0.8rem;
    //   border-top-right-radius: 0.8rem;
    // }
    // ----------------------------------------- //
    .bottom-new_story-container {
      background-color: $firstBackgroundColor;
      border-bottom-left-radius: 0.8rem;
      border-bottom-right-radius: 0.8rem;
      // box-sizing: border-box;
      // flex-grow: 1;
      .new_story_icon-container {
        position: relative;
        @include flex-center-center;
        .new_story-icon {
          position: absolute;
          display: block;
          @include flex-center-center;
          height: 2rem;
          width: 2rem;
          border-radius: 50%;
          color: $lightBlueColor;
          background-color: $mainFontColor1;
        }
      }
    }
    span {
      display: block;
      margin: 1rem;
      color: $mainFontColor1;
      font-size: $fontSize2;
      font-weight: bold;
    }
  }
}
// A VOIR ----------------------------------- //
.story-thumbnail:hover {
  background-size: auto 88%;
}
// A VOIR ----------------------------------- //
.over_bg {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 0.8rem;
}
</style>
