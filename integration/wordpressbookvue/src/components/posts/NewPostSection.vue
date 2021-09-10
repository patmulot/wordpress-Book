<template>
  <section class="add-new_post-container">
    <div class="add-new_post">
      <div class="user_image-container">
        <a href="" class="user_image-link">
          <!-- <img src="" alt="" class="user_image"> -->
          <i class="fas fa-user-circle user_image"></i>
        </a>
      </div>
      <div class="add-new_post-content" @click="handleClickOnNewPublication">
        <p>Quoi de neuf, Pat ?</p>
        <!-- <input type="text" placeholder="Quoi de neuf, Pat ?" class="add-new_post-content-input hidden"> -->
      </div>
    </div>
    <div class="add-new_post-links">
      <ul>
        <li>
          <a href="" class="video">
            <i class="fas fa-video icon-video icon"></i>
            Vidéo en direct
          </a>
        </li>
        <li>
          <a href="" class="photo">
            <i class="fas fa-photo-video icon-photo icon"></i>
            Photo/Vidéo
          </a>
        </li>
        <li>
          <a href="" class="activity">
            <i class="far fa-grin icon-activity icon"></i>
            Humeur/Activité
          </a>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
// import storyElement from '@/components/StoryElement.vue'
export default {
  name: "StorySection",
  components: {
    // storyElement,
  },
  methods: {
    handleClickOnNewPublication: function() {
      let CreateNewPostElementContainer =  document.querySelector(".add-new_post-form-main_container")
      CreateNewPostElementContainer.style.display = "block";
      let formInput = document.querySelector(".add-new_post-text-input");
      formInput.focus();
    }
  }
};
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.add-new_post-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: $firstBackgroundColor;
  margin-top: 1.4rem;
  padding: 0.8rem 0.6rem;
  border-radius: 0.8rem;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
  .add-new_post {
    display: flex;
    border-bottom: 1px solid $secondBackgroundColor;
    padding-bottom: 0.8rem;
    justify-content: space-between;
    .user_image-container {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      .user_image {
        display: block;
        height: 2.4rem;
        width: 2.4rem;
      }
    }
    .user_image-container:hover {
      background-color: $thirdBackgroundColor;
    }
    .add-new_post-content {
      height: 2.4rem;
      background-color: $secondBackgroundColor;
      border-radius: 1.2rem;
      width: 100%;
      display: flex;
      align-items: center;
      p {
        margin: 0;
        padding: 0;
        display: flex;
        margin-left: 0.6rem;
      }
        margin-left: 0.6rem;
    }
    .add-new_post-content:hover {
      background-color: $thirdBackgroundColor;
      cursor: url(../../assets/img/hand-pointer-regular.svg);
    }
  }
  .add-new_post-links {
    padding-top: 0.8rem;
    ul {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-between;
    }
    li {
      height: 3rem;
      width: 100%;
      display: flex;
      align-items: center;
      border-radius: 0.4rem;
    }
    li:hover {
      background-color: rgba(255, 255, 255, 0.082);
    }
    a {
      color: $mainFontColor2;
      margin: auto;
      display: flex;
      align-items: center;
    }
    .icon {
      height: 1.6rem;
      width: 1.6rem;
      padding-right: 0.6rem;
      display: block;
    }
    .icon-video {
      color: rgb(196, 21, 50);
    }
    .icon-photo {
      color: rgb(44, 207, 93);
    }
    .icon-activity {
      color: rgb(247, 207, 28);
    }
  }
}
</style>
