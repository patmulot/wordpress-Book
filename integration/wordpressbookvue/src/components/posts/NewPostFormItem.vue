<template>
  <main
    class="add-new_post-form-main_container"
    @click="handleClickOutOfNewPostForm"
  >
    <div class="add-new_post-form-container">
      <!-- // ------------- POST HEADER SECTION ------------- // -->
      <div class="add-new_post-form-header">
        <div class="add-new_post-form-title">
          <h2>Créer une publication</h2>
        </div>
        <div
          class="add-new_post-form-exit_button"
          @click="handleClickOnExitButton"
        >
          <i class="far fa-times-circle"></i>
        </div>
      </div>
      <!-- // ------------- POST USER INFO SECTION ------------- // -->
      <div class="add-new_post-user_info-container">
        <div class="add-new_post-user_info-img">
          <img
            src="../../assets/img/tmnt_logo.png"
            alt=""
            class="poster_image"
          />
        </div>
        <div class="add-new_post-user_info">
          <span class="add-new_post-user-name"> Pat Mulot </span>
          <div class="add-new_post-status">
            <span class="add-new_post-status-icon">
              <i class="fas fa-user-friends usual_link-icon"></i>
            </span>
            <span class="add-new_post-status-name"> Amis </span>
            <span class="add-new_post-status-list_icon">
              <i class="fas fa-sort-down"></i>
            </span>
          </div>
        </div>
      </div>
      <!-- // ------------- POST CONTENT/MESSAGE SECTION ------------- // -->
      <div class="add-new_post-text-form">
        <input
          type="textarea"
          class="add-new_post-text-input v-hidden"
          @blur="handleBlurOnInputPostForm"
          v-model="postContent"
          placeholder="Quoi de neuf, User ?"
        />
      </div>
      <div class="add-new_post-options">
        <div class="add-new_post-background_color">Aa</div>
        <div class="add-new_post-smiley_selector">
          <i class="far fa-smile smiley_selector-icon"></i>
        </div>
      </div>
      <!-- // ------------- POST FEATURED OPTIONS SECTION ------------- // -->
      <form
        @submit="sendPublication"
        method="post"
        enctype="multipart/form-data"
        class="add-new_post-publication_options-button-container"
      >
        <div class="add-new_post-publication_options-container">
          <div class="add-new_post-publication_options-title">
            <span>Ajouter à votre publication</span>
          </div>
          <div class="add-new_post-publication_options-button-container">
            <div class="add-new_post-publication_options-buttons">
              <label for="file">
                <i class="fas fa-photo-video icon-medias icon"></i>
              </label>
              <input
                type="file"
                id="file"
                name="file"
                @change="previewFiles"
                multiple
              />
            </div>
            <div class="add-new_post-publication_options-buttons">
              <i class="fas fa-user-tag icon-identify icon"></i>
            </div>
            <div class="add-new_post-publication_options-buttons">
              <i class="far fa-grin icon-activity icon-humor icon"></i>
            </div>
            <div class="add-new_post-publication_options-buttons">
              <i class="fas fa-map-marker-alt icon-localisation icon"></i>
            </div>
            <div class="add-new_post-publication_options-buttons">
              <i class="fas fa-microphone icon-micro icon"></i>
            </div>
            <div class="add-new_post-publication_options-buttons">
              <i class="fas fa-ellipsis-h icon-menu icon"></i>
            </div>
          </div>
        </div>
        <div class="add-new_post-form-submit_button-container">
          <button class="add-new_post-form-submit_button">Publier</button>
        </div>
      </form>
    </div>
  </main>
</template>

<script>
import publicationService from "../../services/publicationService";
export default {
  name: "newPostFormItem",
  data() {
    return {
      postContent: "",
      files: [],
      createdFail: false,
      // reload : ---------------- //
      reloadValueToEmit: false,
    };
  },
  methods: {
    previewFiles: function (evt) {
      this.files = evt.target.value;
    },
    async sendPublication(evt) {
      evt.preventDefault();
      const result = await publicationService.savePublication(
        this.postContent,
        this.files
      );
      if (result) {
        this.createdFail = false;
      } else {
        this.createdFail = true;
      }
      // reload : ---------------- //
      // this.reloadValueToEmit = "coucou test emit from form";
      this.reloadValueToEmit = true;
      this.$emit("new-publication-reload", this.reloadValueToEmit);
      this.exitForm();
      // location.reload();
    },
    exitForm: function () {
      let CreateNewPostElementContainer = document.querySelector(
        ".add-new_post-form-main_container"
      );
      CreateNewPostElementContainer.style.display = "none";
    },
    handleClickOnExitButton: function (evt) {
      evt.preventDefault();
      this.exitForm();
    },
    handleBlurOnInputPostForm: function (evt) {
      evt.preventDefault();
      // this.exitForm(); //! désactivé pour le moment
    },
  },
};
</script>
<style scoped lang="scss">
@import "../../assets/scss/main.scss";
#file {
  background-color: rgba(0, 0, 0, 0);
  display: none;
}
// .v-hidden {
//   visibility: hidden;
// }
.add-new_post-form-main_container {
  display: none;
  height: 100vh;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
  .add-new_post-form-container {
    width: 50%;
    position: relative;
    top: 25%;
    margin: auto;
    background-color: $firstBackgroundColor;
    border: solid 1px $secondBackgroundColor;
    border-radius: 0.6rem;
    // ------------- POST HEADER SECTION ------------- //
    .add-new_post-form-header {
      @include flex-center-center;
      padding: 0.8rem;
      border-bottom: 1px solid $secondBackgroundColor;
      .add-new_post-form-title {
        font-size: 0.85rem;
        font-weight: bold;
        color: $mainFontColor1;
        line-height: 0;
        width: 100%;
        text-align: center;
      }
      .add-new_post-form-exit_button {
        @include flex-center-center;
        font-size: 2rem;
        border-radius: 50%;
      }
      .add-new_post-form-exit_button:hover {
        background-color: $secondBackgroundColor;
        // text-decoration: $mainFontColor2 underline;
        cursor: pointer;
      }
    }
    // ------------- POST USER INFO SECTION ------------- //
    .add-new_post-user_info-container {
      display: flex;
      align-items: center;
      padding: 0.8rem;
      .add-new_post-user_info-img {
        border-radius: 50%;
        height: 2.6rem;
        width: 2.6rem;
        margin-right: 0.6rem;
        display: flex;
        align-items: center;
        border: solid 1px $thirdBackgroundColor;
        box-sizing: border-box;
        .poster_image {
          display: block;
          width: 100%;
          height: auto;
        }
      }
      .add-new_post-user_info-img:hover {
        cursor: pointer;
      }
      .add-new_post-user_info {
        height: 2.6rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        .add-new_post-user-name {
          color: $mainFontColor1;
          font-weight: bold;
        }
        .add-new_post-status {
          @include flex-spaceB-center;
          font-size: 0.8rem;
          font-weight: bold;
          color: $mainFontColor1;
          background-color: $fourthBackgroundColor;
          border-radius: 0.4rem;
          padding: 0.2rem;
          // margin: 0.4rem 0;
        }
        .add-new_post-status:hover {
          cursor: pointer;
        }
      }
    }
    // ------------- POST CONTENT/MESSAGE SECTION ------------- //
    .add-new_post-text-form {
      position: relative;
      margin: 0 1rem;
      height: 6rem;
      .add-new_post-text {
        position: absolute;
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        font-size: 1.4rem;
        color: $mainFontColor2;
      }
      .add-new_post-text-input {
        position: absolute;
        width: 100%;
        vertical-align: text-top;
        background-color: rgba(0, 0, 0, 0);
        font-size: 1.4rem;
        color: $mainFontColor1;
        border: none;

        overflow-wrap: break-word; //!
        // word-wrap: break-word; //!
        // word-break: break-all; //!
      }
      .add-new_post-text-input:focus {
        outline: none !important;
      }
    }
    // ------------- POST OPTIONS SECTION ------------- //
    .add-new_post-options {
      @include flex-spaceB-center;
      margin: 0 1rem;
      .add-new_post-background_color {
        height: 2rem;
        width: 2rem;
        @include flex-center-center;
        background: linear-gradient(
          to bottom right,
          rgb(255, 0, 0),
          rgb(23, 255, 197)
        );
        color: $mainFontColor1;
        border: solid 2px $mainFontColor1;
        border-radius: 0.6rem;
        box-sizing: border-box;
      }
      .add-new_post-background_color:hover {
        cursor: pointer;
      }
      .add-new_post-smiley_selector {
        height: 2rem;
        width: 2rem;
        font-size: 1.4rem;
        @include flex-center-center;
        border-radius: 50%;
        color: $thirdBackgroundColor;
        .smiley_selector-icon {
          height: 100%;
          width: 100%;
        }
      }
      .add-new_post-smiley_selector:hover {
        cursor: pointer;
        background-color: $secondBackgroundColor;
      }
      .add-new_post-humor_selector {
        cursor: pointer;
      }
    }
    // ------------- POST OPTIONS SECTION ------------- //
    .add-new_post-publication_options-container {
      @include flex-spaceB-center;
      border: solid 1px $secondBackgroundColor;
      border-radius: 0.4rem;
      margin: 1rem;
      padding: 1rem;
      .add-new_post-publication_options-title {
        display: flex;
        align-items: center;
        flex-grow: 1;
        span {
          color: $mainFontColor1;
          font-weight: bold;
        }
      }
      .add-new_post-publication_options-button-container {
        @include flex-spaceB-center;
        flex-grow: 1;
        .add-new_post-publication_options-buttons {
          height: 2rem;
          width: 2rem;
          @include flex-center-center;
          border-radius: 50%;
          position: relative;
          input {
            height: 100%;
            width: 100%;
            background-color: rgb(139, 89, 89);
            position: absolute;
            // display: none;
          }
        }
        .add-new_post-publication_options-buttons:hover {
          background-color: $secondBackgroundColor;
          cursor: pointer;
        }
        // .icon {
        // }
        .icon-medias {
          color: rgb(44, 207, 93);
        }
        .icon-identify {
          color: #3388f1;
        }
        .icon-humor {
          color: rgb(247, 207, 28);
        }
        .icon-localisation {
          color: rgb(196, 71, 21);
        }
        .icon-micro {
          color: rgb(196, 21, 50);
        }
        // .icon-menu {
        // }
      }
    }
    // ------------- SUBMIT SECTION ------------- //
    .add-new_post-form-submit_button-container {
      padding: 1rem;
      .add-new_post-form-submit_button {
        width: 100%;
        padding: 0.6rem;
        font-size: 1rem;
        font-weight: bold;
        color: $mainFontColor2;
        background-color: $secondBackgroundColor;
        border-radius: 0.4rem;
        border: none;
        //! conditions : if pas de message dans l'input alors background gris sinon background bleu et possibilité de publier acessible
      }
      .add-new_post-form-submit_button:hover {
        cursor: pointer;
        background-color: $thirdBackgroundColor;
      }
    }
  }
}
</style>
