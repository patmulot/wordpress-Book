<template>
  <div class="user_profile-thumbnail-container">
    <div class="user_profile-thumbnail-content">
      <img
        src="https://source.unsplash.com/random"
        alt=""
        class="user_profile-thumbnail-img"
      />

      <div class="user_profile-thumbnail-info-container">
        <div class="user_profile-thumbnail-info">
          <h2 class="user_profile-thumbnail-name">Lorem ipsum</h2>
        </div>
        <div class="user_profile-thumbnail-latest_activity">
          <i class="fas fa-user-friends user_profile-thumbnail-icon"></i>
          <span class="user_profile-thumbnail-latest_activity-content"
            >Lorem ipsum dolor sit.</span
          >
        </div>
        <div class="user_profile-thumbnail-latest_activity">
          <i
            class="fas fa-users usual_link-icon user_profile-thumbnail-icon"
          ></i>
          <span class="user_profile-thumbnail-latest_activity-content"
            >Lorem ipsum dolor sit.</span
          >
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "ProfileThumbnail",
};
</script>
<style scoped lang="scss">
@import "../../assets/scss/main.scss";
.user_profile-thumbnail-container {
//   height: 10rem;
//   width: 20rem;
//   background-color: rgb(0, 0, 0);
  position: relative;
  display: none;
  box-shadow: 0px 0px 6px rgb(185, 27, 27);
  .user_profile-thumbnail-content {
    height: 10rem;
    width: 20rem;
    position: absolute;
    top: 0;
    right: 1rem;
    display: flex;
    border: solid 1px $thirdBackgroundColor;
    border-radius: 0.4rem;
    background-color: $firstBackgroundColor;
    // z-index: 250;
    .user_profile-thumbnail-img {
      height: 5rem;
      width: 5rem;
      min-height: 5rem;
      min-width: 5rem;
      
      border-radius: 50%;
      margin: 1rem;
    }
    .user_profile-thumbnail-info {
      color: $mainFontColor1;
    }
    .user_profile-thumbnail-info-container {
      width: 100%;
      display: flex;
      flex-direction: column;
      .user_profile-thumbnail-latest_activity {
        margin: 0.6rem 0;
        .user_profile-thumbnail-icon {
          margin-right: 0.4rem;
        }
      }
    }
  }
}
</style>
