<template>
    <div class="bg_color" v-if="modalFlg">
    <div class="bg_incolor">
        <img :src="products[productnum].img">
        <h4>상품명 : {{ products[productnum].name }} </h4>
        <p>설명 : {{ products[productnum].content }}</p>
        <p>가격 : {{ products[productnum].price }} </p>
        <p>수량 : {{ products[productnum].count }}<span></span>
            <button>증가</button>
            <button >감소</button>
        </p>
        <h4 @click="$emit('closeModal');">X</h4>
    </div>
    </div>
</template>
<script>
export default {
    name:'Modal',
    props: {
        modalFlg: Boolean,
        products: Object,
        productnum: Number,
        
    }
}
</script>
<style lang="">
    
</style>