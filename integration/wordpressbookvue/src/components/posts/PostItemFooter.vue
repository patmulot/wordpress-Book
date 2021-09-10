<template>
  <div class="post_item-footer">
    <div class="post_item-footer-reactions">
      <div class="reactions_container">
        <div class="reaction_icons like-icon">
          <i class="fas fa-thumbs-up"></i>
        </div>
        <div class="reaction_icons heart-icon">
          <i class="fas fa-heart"></i>
        </div>
        <div class="reaction_icons laugh-icon">
          <i class="fas fa-laugh-squint"></i>
        </div>
        <div class="reaction_icons surprise-icon">
          <i class="fas fa-surprise"></i>
        </div>
        <div class="reaction_icons sad-icon">
          <i class="fas fa-sad-tear"></i>
        </div>
        <div class="reaction_icons angry-icon">
          <i class="fas fa-angry"></i>
        </div>
        <span class="reactions_counter">12</span>
      </div>
      <div class="users_reacting">
        <ul>
          <li class="user_reacting"><span>blible blu</span>,</li>
          <li class="user_reacting"><span>bli bleblu</span></li>
          <!-- <li class="user_reacting"></li><span>blibli bleblu</span> -->
          <li class="user_reacting">
            et <span class="other_users">12</span>
            autres personnes
          </li>
        </ul>
      </div>
      <div class="comments_count-container action_counters">
        <div href="" class="comments_count buttons">
          <span class="other_users">8</span> commentaires
        </div>
      </div>
      <div class="shares_count-container action_counters">
        <div href="" class="shares_count buttons">
          <span class="other_users">30</span> partages
        </div>
      </div>
    </div>

    <div class="post_item-footer-utils">
      <ul>
        <li class="post-like">
          <i class="far fa-thumbs-up post_item-footer-icon"></i>
          <span>J'aime</span>
        </li>
        <li class="post-comment">
          <i class="far fa-comment-alt"></i>
          <span>Commenter</span>
        </li>
        <li class="post-share">
          <i class="fas fa-share"></i>
          <span>Partager</span>
        </li>
      </ul>
      <div class="profile-selector">
        <i
          class="fas fa-user-circle user_profile-icon profile-selector-icon"
        ></i>
        <i
          class="
            fas
            fa-chevron-down
            select_profile-arrow-icon
            profile-selector-icon
          "
        ></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostItemFooter",
  // methods: {
  //   displayPosterThumbnail: function (evt) {
  //     console.log(evt);
  //     console.log("hello displayPosterThumbnail");
  //   },
  // },
};
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.buttons {
  border-bottom: solid 1px $firstBackgroundColor;
}
.buttons:hover {
  text-decoration: $mainFontColor2 underline;
  cursor: pointer;
}
.post_item-footer {
  margin: 0 1rem;
  .post_item-footer-reactions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 3rem;
    padding: 0.4rem 0;
    .reactions_container {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      color: $mainFontColor1;
      span {
        color: $mainFontColor2;
      }
      .reaction_icons {
        display: flex;
        justify-content: center;
        align-items: center;
        // height: 1.2rem;
        // width: 1.2rem;
        border: solid 2px $firstBackgroundColor;
        border-radius: 50%;
        font-size: 0.7rem;
        padding: 0.2rem;
        margin-left: -0.2rem;
        box-shadow: 0px 0px 10px rgba(207, 207, 207, 0.3) inset;
      }
      .like-icon {
        background-color: rgb(36, 76, 207);
      }
      .heart-icon {
        background-color: rgb(187, 36, 61);
      }
      .laugh-icon,
      .surprise-icon,
      .sad-icon,
      .angry-icon {
        font-size: 1.1rem;
        color: rgb(255, 208, 0);
        padding: 0;
      }
      .reaction_icons:hover {
        cursor: pointer;
      }
      .reactions_counter:hover {
      text-decoration: $mainFontColor2 underline;
        cursor: pointer;
      }
    }
    .users_reacting {
      height: 100%;
      ul {
        display: flex;
        align-items: center;
        height: 100%;
      }
      span {
        font-size: 1rem;
      }
    }
    .users_reacting:hover {
      text-decoration: $mainFontColor2 underline;
      cursor: pointer;
    }
    .action_counters {
      display: flex;
      align-items: center;
      height: 100%;
    }
  }

  .post_item-footer-utils {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid $secondBackgroundColor;
    box-sizing: border-box;
    font-weight: bold;
    height: 100%;
    height: 2rem;
    ul {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      height: 100%;
      padding-top: 0.4rem;
      li {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 0.4rem;
        span {
          padding-left: 0.6rem;
        }
      }
      li:hover {
        background-color: $secondBackgroundColor;
        cursor: pointer;
      }
    }
    .profile-selector {
      border-radius: 0.4rem;
      display: flex;
      align-items: center;
      padding: 0.4rem;
      .user_profile-icon {
        margin-right: 0.4rem;
      }
    }
    .profile-selector:hover {
      background-color: $secondBackgroundColor;
      cursor: pointer;
    }
  }
}
</style>
