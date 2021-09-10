import axios from 'axios';
// import storage from '../plugins/storage.js';
const publicationService = {
  baseURI: 'http://localhost/neo/mes-travaux-2/wordpressBook/public/wp-json/wp/v2',
  wordpressBookBaseURI: "http://localhost/neo/mes-travaux-2/wordpressBook/public/wp-json/wordpressbook/v1",
  // oCookingBaseURI: 'http://localhost/neo/speWP/S01/E12/ocooking/public/wp-json/ocooking/v1',

  // async loadRecipes() {
  async loadPublications() {
    const response = await axios.get(publicationService.baseURI + '/publication');
    // console.log("coucou loadpublications");
    return response.data;
  },
  async loadPublicationsMedias(mediaId) {
    const response = await axios.get(publicationService.baseURI + "/media/" + mediaId)
    return response.data;
  },
  // -------------- ADDING NEW PUBLICATION API -> DB -------------- //
  async savePublication(postContent, postFiles) {
    // const userData = storage.get('donneesUtilisateur');
    // if (userData != null) {
      // const token = userData.token;
      // if (token) {
        // const options = {
        //   headers: {
        //     Authorization: 'Bearer ' + token
        //   }
        // };

        console.log(postContent);

        const body = {
          content: postContent,
          files: postFiles,
        };

        console.log(body.content);
        console.log(body.files);
        
        const result = axios.post(
          publicationService.wordpressBookBaseURI + '/publication-save',
          body,
          // options
        )
        .catch(function (error) {
          console.log(error);
          return false;
        });
        return result;
      // }

    // }
    // return false;
  },

  // async loadRecipesTypes() {
  //   const response = await axios.get(recipeService.baseURI + '/receipe-type?_embed=true');
  //   return response.data;
  // },
  // async loadRecipesIngredients() {
  //   const response = await axios.get(recipeService.baseURI + '/ingredient?_embed=true');
  //   return response.data;
  // },

  // async loadRecipesById(recipeId) {
  //   const response = await axios.get(recipeService.baseURI + '/receipe/' + recipeId + '?_embed=true');
  //   return response.data;
  // },

  // async loadRecipeByType(selectedValue) {
  //   const response = await axios.get(recipeService.baseURI + '/receipe?_embed=true&receipe-type=' + selectedValue);
  //   return response.data;
  // },

  // async loadRecipeByIngredient(selectedValue) {
  //   const response = await axios.get(recipeService.baseURI + '/receipe?_embed=true&ingredient=' + selectedValue);
  //   return response.data;
  // },
};
export default publicationService;