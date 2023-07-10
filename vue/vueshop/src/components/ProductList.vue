<template>
   <div class="contain">
    <img :src="product.img">
        <h4 @click="$emit('openModal');">{{ product.name }}</h4>
        <p>{{ product.price *product.count }} 원</p>
        <p>{{ product.count }} 개</p>
    </div>
</template>
<script>
export default {
    name: 'ProductList',
    props: {
        product: Object,
    }
}
</script>

<style>
    .contain{
        float: left;;
        
    }
</style>