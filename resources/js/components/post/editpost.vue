<template>
  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Blog Post</h4>
                  
                    <form role="form" enctype="multipart/form-data" @submit.prevent="addnewPost()">
                    <div class="form-group">
                      <label for="exampleInputName1">Title:</label>
                      <input type="hidden" class="form-control" id="id" v-model="id" name="id">
                      <input type="text" class="form-control" id="title" placeholder="Title"  v-model="title" name="title">
                     
                      
                    </div>

                      <div class="form-group" >
                          <label>Select</label>
                          <select class="form-control"  v-model="cat_id">
                              <option disabled value="">Select One</option>
                              <option :value="category.id" v-for="category in getallcategory">{{category.cat_name}}</option>

                          </select>
                          
                      </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Description:</label>
                      
                      <textarea  rows="5" class="form-control" id="details" placeholder="Description " v-model="details" name="details"></textarea>
                      
                    </div>


                  <div class="form-group" >
                        <input @change = "changePhoto($event)" name="photo" type="file" >
                      
                    </div>
                    <img :src="`public/uploadimage/${image}`"><br>
                    
                    
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>

                </div>
                
               
              </div>
            </div>
</template>

<script>
import { required } from 'vuelidate/lib/validators';
    export default {
      data(){
        return{
          title:'',
          details:'',
          photo:'',
          image:'',
          cat_id:'',
          id:'',
        }
      },
      
        mounted() {
            axios.get(`/post/edit/${this.$route.params.id}`)
            .then((res)=>{
              console.log(res.data)
              this.title =res.data.title
              this.details =res.data.details
              this.image =res.data.photo
              this.id =res.data.id
             
            })

            return this.$store.dispatch("allcategory")

        
        },
        
        computed:{
          getallcategory(){

              return this.$store.getters.getCategory
            }
        },

        methods:{
          changePhoto(event){

                let file = event.target.files[0];
                 if(file.size>1048576){
                     swal({
                         type: 'error',
                         title: 'Oops...',
                         text: 'Something went wrong!',
                         footer: '<a href>Why do I have this issue?</a>'
                     })
                 }else{
                     let reader = new FileReader();
                     reader.onload = event => {
                         this.photo = event.target.result
                         console.log(event.target.result)
                     };
                     reader.readAsDataURL(file);
                 }
             
            
          },
          addnewPost(){
            const vm =this;
              const postData = {
                title: this.title,
                details: this.details,
                photo: this.photo,
                category_id: this.cat_id,
                id: this.id,
              }
                 axios.post('/post/update', postData)
                .then(function(res){
                   vm.$toast.success('Successfully Updated record!', 'OK',{position:'topRight'});
                  vm.$router.push('/posts');
                    
                })
                .catch(error => console.log(error))
          }
        }

        
    }
</script>