<template>


  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li @click="$store.commit('changetabFlg',0); $store.commit('cancelFilter')" v-if="$store.state.tabFlg != 0 " class="header-button header-button-left">취소
      </li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li @click="$store.commit('changetabFlg',2)" v-if="$store.state.tabFlg == 1" class="header-button header-button-right">다음
      </li>
      <li @click="$store.dispatch('writeContent')" v-if="$store.state.tabFlg == 2" class="header-button header-button-right">작성
      </li>
      
    </ul>
  </div>
{{ $store.state.lastId }}
<!-- 컨텐츠 -->

<ListCompon>

</ListCompon>

<br>
<button v-if ="$store.state.flg && $store.state.tabFlg == 0"  @click="$store.dispatch('getMoreList')">더보기</button>
<br>
<!-- 푸터 -->
<div class="footer">
  <div class="footer-button-store">
    <label for="file" class="label-store">+</label>
    <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
  </div>
</div>
</template>

<script>
import ListCompon from './components/ListCompon.vue'



export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  methods: {
    updateImg(e) { // e를 파라미터로 넣으면 모든 event를 넣어 준다.
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changetabFlg', 1);
      this.$store.commit('changeimg', file[0]);
      e.target.value = ''; // 초기화를 시켜서 tab단을 다시 셋팅
    }
  },
  components: {
    ListCompon:ListCompon,
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

@import url(./assets/css/common.css)
</style>
