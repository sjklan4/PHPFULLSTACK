<template>
  <div>
    <h1><img alt="Vue logo" src="./assets/gom.png"> SIMPLEPAGES</h1>
  </div>
  <div class="nav">
    <a href="">HOME</a>
    <a href="" id="product">PRODUCT</a>
    <a href="">기타</a>
  </div>




  <!-- 테그 안에 반복문 작성 -->
  <div v-for="(item, i) in products" :key="i"> 
  <!-- 모달창 -->
    <div class="bg_color" v-if="item.modalFlg">
      <div class="bg_incolor">
        <img :src="item.img">
        <h4>상품명 : {{ item.name }}</h4>
        <p>설명 : {{ item.content }}</p>
        <p>가격 : {{ item.price }}</p>
        <p>수량 : <span>{{ item.count }}</span><button @click="plus(i);">증가</button>
          <button  v-on:click="item.count--;">감소</button>
        </p>
        <p @click="item.modalFlg = false">X</p>
      </div>
    </div>

    <table>
      <tr>
        <td >
          <img :src="item.img">
          <h4 @click="item.modalFlg=true">name : {{ item.name }} </h4>
        </td>
        <td>
          price : {{ item.price }}원
        </td>
        <td>
          size : {{ item.size }}
        </td>
        <td>
          생산 : {{ item.fac }}
        </td>
        <td>
          수량 : <span>{{ item.count }}</span><button @click="plus(i);">증가</button>
          <button  v-on:click="item.count--;">감소</button>
          <button @click="minus(i)">감소</button>
        </td>
      </tr>
    </table>
  </div>


  <!-- if문 -->
<p v-if="1 == 1">if문 테스트</p>



  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원어어언</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
  </div> -->
</template>

<script>
import data from './assets/js/data.js';
export default {
  name: 'App',
  data(){ //데이터 바인딩
    return{
      modalFlg:false,
      products : data,
      // products: [
      //   {name:'티셔츠', price: '3800', size: 'xl', fac : '강원도', count :'1', img:require('@/assets/tshirt.jpg')} //나의 서버에 있는 이미지를 가져 올때 사용하는 방법
      //   ,{name:'바지', price: '5000', size: 'xxl', fac : '말레이시아', count :'1',img:require('@/assets/pens.jpg') }
      //   ,{name:'점퍼', price: '3800', size: 's', fac : '태국', count :'1', img:require('@/assets/jumper.jpg')}
      // ],
      product1: '양말',
      price1: '3800', 
      product2 : '가디건',
      price2: '5000',
      styleR: 'color:red',
    }
  },
  methods : { // 함수를 설정하는 영역
    plus(i){
      this.products[i].count++; //데이터 영역에서 함수 사용시 this를 붙여야 한다. 
    },
    minus(i){
      this.products[i].count--;
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



td{
  padding: 0 10px;
  border: 2px solid black;
}
img{
  width: 200px;
  height: 200px;
}

@import url('./assets/css/css.css');
</style>
