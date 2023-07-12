<template lang="">
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent>

        </PostComponent>
    </div>
    <!-- 이미지 필터 -->
    <div  v-if="$store.state.tabFlg == 1">
        <div class="upload-img" :style="{backgroundImage : `url(${$store.state.imgUrl})`}" :class = "$store.state.filterClass"></div>
        <div class="filter-box">
            <div class="filter" :class="item" v-for="item in filterList" :key="item"  :style="{backgroundImage : `url(${$store.state.imgUrl})`}" @click="$store.commit('filterImg', item)">{{ item }}</div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div  v-if="$store.state.tabFlg == 2">
        <div class="upload-img" :style="{backgroundImage : `url(${$store.state.imgUrl})`}" :class = "$store.state.filterClass"></div>
        <div >
            <textarea class="write-box" name="content" id="content" placeholder="글쓰세요" @input ="$store.commit('contents',$event.target.value)" ></textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue'

export default {
    name: 'ListCompon',
    data(){
        return{
            filterList:[ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        PostComponent:PostComponent,
    }
}
</script>
<style lang="">
    
</style>