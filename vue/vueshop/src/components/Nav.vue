<template>
    <div class="nav">
        <a href="">HOME</a>| 
        <a href="" id="product">PRODUCT</a> |
        <a href="">특별전</a> |
        <a v-for="(item, i) in navList" :key="i">{{ item }}</a>
    </div>
</template>
<script>

export default {
    name:'Nav',
    props:{
        //product1: String, //부무한테 정의되어 있는 데이터를 상속 받는 구문
        navList : Array,
    }
}
</script>
<style>
    
</style>