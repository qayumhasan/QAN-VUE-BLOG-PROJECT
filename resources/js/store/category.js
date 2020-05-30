export default{
	state:{
		category:[],
		posts:[],
	},
	getters:{
		

		 getCategory: (state, getters) => {

   			 return state.category
			  },
		getPost: (state, getters) => {

			   			 return state.posts
			  }
	},
	

	actions:{
		allcategory(context){
			
			axios.get('/category')
				.then((res)=>{
					
					context.commit('category',res.data)
				})
		},

		allpost(context){
			
			axios.get('/post')
				.then((res)=>{
					 
					context.commit('posts',res.data)
				})
		},
	},
	mutations:{
		category(state ,data){
			return state.category =data
		},
		posts(state ,data){
			return state.posts =data
		},
	},





}