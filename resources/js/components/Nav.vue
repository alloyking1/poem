<template>
    <div>
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-light headroom">
            <div class="container">
            <a class="navbar-brand mr-lg-5" href="../index.html">
                <!-- <img src="../assets/img/brand/white.png"> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                    <a href="../../../index.html">
                        <!-- <img src="../assets/img/brand/blue.png"> -->
                    </a>
                    </div>
                    <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                    </button>
                    </div>
                </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item">
                    <!-- <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                    <i class="ni ni-ui-04 d-lg-none"></i>
                    <span class="nav-link-inner--text">Home</span>
                    </a> -->
                    <router-link to="/">Home</router-link>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Categories</span>
                    </a>
                    <div class="dropdown-menu" v-for="eachOne in categoryNav" :key="categoryNav.index">
                        <router-link :to="{ path: '/category/post/'+eachOne.id+'/'+eachOne.name}" class="dropdown-item">{{eachOne.name}}</router-link>
                    </div>
                </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                        <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                        <i class="fa fa-twitter-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <a href="/login" target="_blank" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                            <i class="fa fa-shopping-cart"></i>
                        </span>
                        <span class="nav-link-inner--text">Login</span>
                        </a>
                        <a href="/register" target="_blank" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                                <i class="fa fa-cloud-download mr-2"></i>
                            </span>
                            <span class="nav-link-inner--text">Signup</span>
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            categoryNav:{}
        }
    },

    created(){
        this.fetch()
    },

    methods:{
        fetch(){
            axios.get('/api/user/category')
            .then(res => {
                this.categoryNav = res.data
                console.log(this.categoryNav)
            })
        }
    }
}
</script>