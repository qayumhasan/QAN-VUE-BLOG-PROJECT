import addCategory from './components/category/add_category.vue'
import Category from './components/category/Category.vue'
import editCategory from './components/category/edit_category.vue'
import storePost from './components/post/store.vue'
import listPost from './components/post/list.vue'
import editPostComponents from './components/post/editpost.vue'
export const routes = [
    { path: '/category/add', component: addCategory },
    { path: '/category', component: Category },
    { path: '/category/edit/:id', component: editCategory },
    { path: '/post/store', component: storePost },
    { path: '/posts', component: listPost },
    { path: '/post/edit/:id', component: editPostComponents },
  ]