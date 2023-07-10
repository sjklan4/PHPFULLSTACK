<template>
    <div class="bg_color" v-if="modalFlg">
    <div class="bg_incolor">
        <img :src="products[productnum].img">
        <h4>상품명 : {{ products[productnum].name }} </h4>
        <p>설명 : {{ products[productnum].content }}</p>
        <p>가격 : {{ products[productnum].price * inputTest }}  </p>
        <!-- <p>수량 : {{ products[productnum].count }} 개
           
            <button @click="$emit('plus')">증가</button>
            <button  @click="$emit('minus')">감소</button>
        </p> -->
        입력수량 : {{ inputTest }}
        <input type="number" v-model="inputTest">
        <h4 @click="$emit('closeModal'); inputTest = 0;">X</h4>
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
        
    },
    data(){
        return{
            inputTest:"",
        } 
    },
    watch: {
        inputTest(input){  //  파라미터 명은 아무거나.
            if( input > 10 ){
                alert('10 이하로 해주세요');
            this.inputTest = 10;
                }
            }
    }

}
</script>
<style lang="">
    
</style>