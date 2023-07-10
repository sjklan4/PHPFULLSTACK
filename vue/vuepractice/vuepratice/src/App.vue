<template>
  <h1><img src="">여기 로고해야됨</h1>
  <div v-for = "(item, i) in products" :key="i">
    <h4>상품명 : {{ item.name }}</h4>
      가격 : {{ item.price }}
      사이즈 : {{ item.size }}
      생산지 : {{ item.fac }}
      수량 : {{ item.count }}
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  data(){ //데이터 바인딩 아래 처럼 바로 데이터를 리턴시켜도 가능, - 수업내용으로 js파일로 별도로 가져와도 가능
    return{
          products: [
          {name:'티셔츠', price: '3800', size: 'xl', fac : '강원도', count :'1'} //나의 서버에 있는 이미지를 가져 올때 사용하는 방법
          ,{name:'바지', price: '5000', size: 'xxl', fac : '말레이시아', count :'1'}
          ,{name:'점퍼', price: '3800', size: 's', fac : '태국', count :'1'}
        ],
      }
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
</style>
