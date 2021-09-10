import Vue from 'vue'
import VueRouter from 'vue-router'
// import OCookingRecipeList from '../components/OCookingRecipeList.vue'
// import SingleRecipe from '../views/SingleRecipe.vue'
// import Login from '../views/Login.vue'
// import Logout from '../views/Logout.vue'
// import UserHome from '../views/UserHome.vue'
// import RecipeCreate from '../views/RecipeCreate.vue'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  // {
  //   path: '/receipe/:id',
  //   name: 'SingleRecipe',
  //   component: SingleRecipe,
  // },
  // {
  //   path: '/login',
  //   name: 'Login',
  //   component: Login
  // },
  // {
  //   path: '/user-home',
  //   name: 'user-home',
  //   component: UserHome
  // },
  // {
  //   path: '/logout',
  //   name: 'Logout',
  //   component: Logout
  // },
  // {
  //   path: '/recipe-create',
  //   name: 'recipe-create',
  //   component: RecipeCreate
  // },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
