<template>
    
           <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        <app-nav></app-nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           <div class="row">
           <router-view></router-view>
        </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      <app-footer></app-footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>

</template>

<script>
    import Nav from './inc/_nav.vue';
    import Footer from './inc/_footer.vue';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
            appNav : Nav,
            appFooter : Footer
        }
    }
</script>
