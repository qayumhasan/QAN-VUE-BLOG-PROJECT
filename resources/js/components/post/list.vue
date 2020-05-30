<template>
   <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-10">
                      <h4 class="card-title">Post List</h4>
                    </div>
                    <div class="col-lg-2">
                      
                      <router-link to="/post/store" class="btn btn-success pull-right">Add Post</router-link>
                    </div>
                  </div>
                 
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            SL
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Details
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            Image
                          </th>
                        

                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr v-for="(post,index) in getallpost" :key="post.id">
                          <td>
                            {{index +1}}
                          </td>
                          <td>
                            {{post.title}}
                          </td>
                           <td>
                            {{post.details | sortlength(50,"---")}}
                          </td>
                          <td v-for="category in post.category">
                            {{category.cat_name}}
                          </td>
                          <td>
                            <img :src="`public/uploadimage/${post.photo}`"/>
                          </td>
                          
                          <td>
                            <router-link :to="`/post/edit/${post.id}`">Edit</router-link>
                             || 
                            <a href="" @click.prevent="deletePost(post.id)" >Delete</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</template>

<script>
    export default {
      name:'List',
        mounted(){
            return this.$store.dispatch("allpost")
        },
      computed:{
          
            getallpost(){


              return this.$store.getters.getPost
            }
        },
        methods:{
          deletePost(id){
            const vm = this;

            vm.$toast.question('Are you sure about that?','confirm',{
    timeout: 20000,
    close: false,
    overlay: true,
    displayMode: 'once',
    id: 'question',
    zindex: 999,
    title: 'Hey',
    message: 'Are you sure about that?',
    position: 'center',
    buttons: [
        ['<button><b>YES</b></button>', function (instance, toast) {
           axios.get('/post/delete/' +id)
                    .then(()=>{
                        vm.$store.dispatch("allpost")
                    })
 
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
            vm.$toast.error('Successfully deleted record!', 'OK',{position:'topRight'});
 
        }, true],
        ['<button>NO</button>', function (instance, toast) {
 
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
 
        }],
    ],
    
   
});
            
             
          }
        }
    }
</script>