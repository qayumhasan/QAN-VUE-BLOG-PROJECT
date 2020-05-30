<template>
	<div>
    <input v-model="search" @input.lazy="searchdata" type="text" placeholder="search">
    
    <ul>
    	<li>
    		<a href="" style="display: block; color: #ffffff">Hello World</a>
    		<a href="" style="display: block; color: #ffffff">{{search}}</a>
    		
    	</li>
    </ul>
</div>

</template>
<script>
	
	export default {
		data(){
		return{
			search:"hello World Qayum hasan"
		}
	},
	methods:{
		searchdata(){
			alert(this.search)
		}
	}
	}
</script>