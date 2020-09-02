<template>
    <div>
        <div class="wrapper">
            <div class="section features-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <span class="badge badge-primary badge-pill mb-3">Insight</span>
                            <h3 class="display-3">{{this.categoryName}}</h3>
                            <p class="lead">The time is now for it to be okay to be great. For being a bright color. For standing out.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" v-for="each in categoryPost" :key="categoryPost.index">
                        <div class="info card p-3" >
                            <!-- <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                            <i class="ni ni-settings-gear-65"></i>
                            </div> -->
                            <h6 class="info-title text-uppercase text-primary">{{each.title}}</h6>
                            <p class="description opacity-8">{{each.content}}</p>
                            <!-- <router-link :to="{ path: '/category/post/'+each.id}">See posts -->
                            <!-- <i class="ni ni-bold-right text-primary"></i> -->
                            <!-- </router-link> -->
                            <!-- {{each}} -->
                            <router-link :to="{path: '/category/single/post/'+each.id}">Read More..</router-link>

                        </div>
                        <br> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            categoryPost:{},
            categoryName:''
        }
    },

    mounted(){
        var id = this.$route.params.id
        this.categoryName = this.$route.params.name
        this.post(id);
    },

    methods:{
        /**
         * Fetch all category post. 
         * @param URL
         * @return $response
         */
        post(id){
            axios.get(`api/user/category/post/${id}`)
            .then(res => {
                this.categoryPost = res
                console.log(this.categoryPost)
            })
        },

        
        
    }
}
</script>