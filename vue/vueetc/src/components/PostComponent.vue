<template>
    <div>
        <h1>여기 포스트임 호랑이기운!</h1>
        <p>{{ propsTest }}</p>
    </div>
</template>
<script>
import{ ref, toRefs } from 'vue';

export default {
    name : 'PostComponent',
    props: {
        propsTest: Number,
    },
    setup(props){
        let data = ref([]);
        let{propsTest} = toRefs(props);
        console.log(propsTest.value);

        
        return {data};


    }

}
</script>
<style lang="">
    
</style>