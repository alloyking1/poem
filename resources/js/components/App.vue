<template>
    <div>
        <nav></nav>
        <router-view></router-view>
    </div>
</template>

<script>
import nav from './Nav.vue'
export default {
    components:{
        nav
    }
}
</script>