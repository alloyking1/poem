<template>
    <div>
        <div class="wrapper container-pad">
            <section class="section bg-secondary">
                <div class="container">
                    <div class="card card-profile shadow mt--300">
                    <div class="px-4">
                        <div class="text-center mt-5">
                        <h3>{{this.content.title}}</h3>
                        <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{this.content.poem_writer.name}}</div>
                        <!-- <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer</div>
                        <div><i class="ni education_hat mr-2"></i>University of Computer Science</div> -->
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <p>
                                    {{this.content.content}}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <!-- <div class="card-profile-actions py-4 mt-lg-0"> -->
                                <div class="">
                                    <button @click="like()" class="btn btn-primary btn-neutral">like</button>
                                    <button type="button" class="btn btn-default">comment</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            content:{}
        }
    },

    mounted(){
        var id = this.$route.params.postId
        this.fetPost(id);
    },

    methods:{
        fetPost(id){
            axios.get(`api/user/category/single/post/${id}`)
            .then(res => {
                this.content = res.data
                console.log(res)
            })
        },

        like(){
            alert('good');
        }
    }
}
</script>

<style  scoped>
    .container-pad{
        padding-top:27rem;
    }
</style>