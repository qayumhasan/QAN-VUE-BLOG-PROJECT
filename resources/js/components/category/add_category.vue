<template>
  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  
                  <form class="forms-sample" @submit.prevent="addCategory">
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Category Name" @input="$v.cat_name.$touch()" v-model="cat_name" name="cat_name">
                      <p v-if="$v.cat_name.$error">Field Must Not Be empty!</p>
                    </div>
                    
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
          cat_name:'',
        }
      },
        mounted() {
            
        },
        validations:{
          cat_name:{
            required,
          }
        },
        methods:{

          addCategory(){
            const category ={
              cat_name:this.cat_name,
            }
            
              axios.post('/category/store', category)
                .then((response)=> {
                  this.$toast.success('Successfully inserted record!', 'OK',{position:'topRight'});
                  this.$router.push('/category')
                })
                .catch((error)=> {
                  console.log(error);
                });
      

          }
        }
    }
</script>