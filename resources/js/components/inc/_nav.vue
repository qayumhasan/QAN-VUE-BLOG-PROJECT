<template>
	 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
       
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <router-link to="/category" class="nav-link">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Category</span>
            </router-link>
          </li>


          <li class="nav-item">
            


            <router-link to="/posts" class="nav-link">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Posts</span>
            </router-link>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               

                <li class="nav-item">
                  <router-link to="/category" class="nav-link">Category</router-link>
                </li>
                
            
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
</template>