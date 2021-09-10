<template>
  <div class="story-thumbnail">
    <a href="" class="story-thumbnail-link">
      <div class="story-user_icon-container">
        <!-- <img src="" alt="" class="user_icon"> -->
        <i class="fas fa-user-circle story-user_icon"></i>
      </div>
      <span>Pat Mulot</span>
    </a>
  </div>
</template>

<script>
export default {
  name: "StoryElement",
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
  background-image: url("https://source.unsplash.com/random");
  background-size: auto 85%;
  background-repeat: no-repeat;
  background-position: center;
  transition-duration: 500ms;
  .story-thumbnail-link {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .story-user_icon-container {
    margin: 1rem;
    .story-user_icon {
      height: 2rem;
      width: 2rem;
      border-radius: 50%;
      border: solid 3px $lightBlueColor;
    }
  }
  span {
    display: block;
    display: block;
    padding: 1rem;
    color: $mainFontColor1;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.2);
    border-bottom-left-radius: 0.8rem;
    border-bottom-right-radius: 0.8rem;
  }
}
.story-thumbnail:hover {
  background-size: auto 88%;
}
</style>
