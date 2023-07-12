<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <p>{{ data.name }}</p>
  <button @click="data.name = '김김김'">김김김</button>

  <br><br>

  <!-- <h1>{{ test }}</h1> -->
  <p>{{ data2.name }}</p>
  <button @click="data2.name = 'data2'">데이터2</button>

  <router-link to="/">홈으로</router-link>
  <router-link to="/post">post</router-link>

  <router-view>

  </router-view>



<!-- <ContainerComponent v-if="flg"></ContainerComponent>
<PostComponent v-if="flg"></PostComponent>
<button @click="flg = !flg"></button> -->

  <PostComponent :propsTest= 1></PostComponent>
  <hr>
</template>

<script>
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';


export default {
  name: 'App',
  setup(){
    let data = ref({name: '홍길동', age: 20});  //데이터 바인딩을 위해서는 항상 ref안에 작성해야 된다.
    let test = 'aaa';
    let data2 = reactive({ //객체 타입에 대해서만 데이터를 사용 할 수 있다. 
      name : '철수',
      age : 5,
    });
      
    


    return {test, data, data2};
  },
  components: {
    PostComponent,
  }
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
</style>
