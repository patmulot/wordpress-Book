<template>
  <div class="post_item-header">
    <div class="post_item-poster-container">
      <div
        class="post_item-poster-img_container"
        @mouseover="displayPosterThumbnail"
      >
        <a href="" class="poster_image-link">
          <img
            src="../../assets/img/tmnt_logo.png"
            alt=""
            class="poster_image"
          />
        </a>
      </div>
      <div class="post_item-poster-info_container">
        <div class="post_item-poster-name" @mouseover="displayPosterThumbnail">
          <a href="" class="poster-link"> Pat Mulot </a>
        </div>
        <div class="post_item-poster-info">
          <a href="" class="poster-link post_date"> 13 h </a>
          - <i class="fas fa-globe-americas"></i>
        </div>
      </div>
    </div>
    <div class="post_item-options">
      <i class="fas fa-ellipsis-h"></i>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostItemHeader",
  methods: {
    // displayPosterThumbnail: function (evt) {
    //   console.log(evt);
    //   console.log("hello displayPosterThumbnail");
    // },
  },
};
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.post_item-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 0.6rem;
  margin: 0 1rem;
  margin-bottom: 0.6rem;
  .post_item-poster-container {
    display: flex;
    .post_item-poster-img_container {
      border-radius: 1rem;
      .poster_image {
        height: 2rem;
        width: auto;
      }
    }
    .post_item-poster-info_container {
      margin-left: 0.8rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      .post_item-poster-info {
        font-size: 0.8rem;
        a {
          color: $mainFontColor2;
        }
      }
      .post_item-poster-name {
        a {
          font-size: 1rem;
          font-weight: bold;
          color: $mainFontColor1;
        }
        a:hover {
          text-decoration: $mainFontColor2 underline;
          cursor: pointer;
        }
      }
      .post_date:hover {
        text-decoration: $mainFontColor2 underline;
        cursor: pointer;
      }
    }
  }
  .post_item-options {
    height: 2rem;
    width: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 1rem;
  }
  .post_item-options:hover {
      cursor: pointer;
    background-color: $secondBackgroundColor;
  }
}
</style>
