import axios from 'axios';
// import storage from '../plugins/storage.js';
const messengerService = {
  baseURI: 'http://localhost/neo/mes-travaux-2/wordpressBook/public/wp-json/wp/v2',
  wordpressBookBaseURI: "http://localhost/neo/mes-travaux-2/wordpressBook/public/wp-json/wordpressbook/v1",
  // async loadAllSingleMessagesFromOneThread(senderId, recipientId) {
  //   const response = await axios.get(messengerService.baseURI + '/messaging');
  //   console.log("senderId = " + senderId);
  //   console.log("recipientId = " + recipientId);
  //   return response.data;
  // },
  // -------------- ADDING NEW PUBLICATION API -> DB -------------- //
  // async saveMessage(messageContent) {
  async saveMessage(senderId, recipientId, messageContent) {
        console.log(senderId);
        console.log(recipientId);
        console.log(messageContent);
        const result = axios.post(
          messengerService.wordpressBookBaseURI + '/message-save',
          senderId,
          recipientId,
          messageContent
        ).catch(function (error) {
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
export default messengerService;