<template>
    <div class="post">
        <div class="post-img"><img src="../assets/gom.png" alt=""></div>
        <div class="post-content" v-for="(item, i) in $store.state.boardData" :key="i">
            <div class="post-img" :style="{ backgroundImage : `url(${item.img})`}" :class ="item.filter"></div>
            <p>{{ item.id }}</p>
            <p>{{ item.name }}</p>
            <p>{{ item.content }}</p>
            <p>{{ item.created_at }}</p>
            <p>{{ item.like }}</p>
        </div>

    </div>
</template>
<script>
export default {
    name : 'PostComponent',
    data(){
        return{
            filterList:[ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },

}

</script>
<style>
    

</style>