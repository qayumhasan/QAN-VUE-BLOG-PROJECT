<template>
  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Category</h4>
                  
                  <form class="forms-sample" @submit.prevent="updateCategory">
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name:</label>
                      <input type="hidden" name="cat_id" v-model="cat_id">
                      <input type="text" class="form-control" id="name" placeholder="Category Name" @input="$v.cat_name.$touch()" v-model="cat_name" name="cat_name">
                      <p v-if="$v.cat_name.$error">Field Must Not Be empty!</p>
                    </div>
                    
                    <button type="submit" :disabled="iscategory == true" class="btn btn-success mr-2">Update</button>
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
          cat_name:'',
          cat_id:'',
        }
      },
        mounted() {

          axios.get(`/category/edit/${this.$route.params.id}`)
      .then((res)=>{
        this.cat_name =res.data.cat_name,
        this.cat_id =res.data.id
      })
            
        },
        validations:{
          cat_name:{
            required,
          }
        },
        methods:{

          updateCategory(){
            const category ={
              cat_name:this.cat_name,
              id:this.cat_id,
            }
              
              axios.post('/category/update', category)
                .then((response)=> {
                  this.$toast.success('Successfully Updated record!', 'OK',{position:'topRight'});
                  this.$router.push('/category')
                  console.log(response)
                })
                .catch((error)=> {
                  console.log(error);
                });
      

          }
        },
        computed:{
          iscategory(){
            if (this.$v.cat_name.$error) {
              return true
            }else{
              return false
            }
          }
        }
    }
</script>