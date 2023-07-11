<template>
  <div>
    <h1><img alt="Vue logo" src="./assets/gom.png"> SIMPLEPAGES</h1>
  </div>
  <!-- <div class="nav">
    <a href="">HOME</a>
    <a href="" id="product">PRODUCT</a>
    <a href="">기타</a>
  </div> -->

<Nav :navList="navList"/> 

<div class="discount" v-if="hookTest">
  <p>지금 당장 구매하시면, {{ discountNum }}% 파격할인</p>
</div>
<br>
<button @click="hookTest = !hookTest">할인체크</button>
<br>

<ProductList :product="product" 
              @openModal="modalFlg = true; productnum=i" 
              v-for="(product, i) in products" :key="i"
              />
<!-- input에서 @input을 사용해서 사용자의 입력을 실시간으로 받아 올 수 있다. 방법 1 : @input="inputTest = $event.target.value" -->
<!--v-model="inputTest"을 사용해서 inputTest데이터 바인딩부분을 가져와서 사용할 수 있다. : 형식은 string -->


<!-- <br>
<input type="text"  v-model="inputTest">
<br> -->
<!-- <span>{{ inputTest }}</span> -->

<!-- @를 사용해서 자식쪽에 있는 $emit와 연동해서 사용이 가능하다. -->
<!-- <Modal @closeModal="modalFlg = false" 
        @plus = "plus(productnum);"
        @minus = "minus(productnum);"
        :productnum="productnum"
        :modalFlg="modalFlg" 
        :products="products" 
        /> -->

<!-- 효과주기 1 -->
<!-- <div class="startTransition" :class="{endTransition : modalFlg}">
  <Modal @closeModal="modalFlg = false" 
          @plus = "plus(productnum);"
          @minus = "minus(productnum);"
          @inputTest="productnum"
          :productnum="productnum"
          :modalFlg="modalFlg" 
          :products="products" 
            />cd
</div> -->

<!-- 효과주기2 -->
<transition name="modalTransition">
  <Modal @closeModal="modalFlg = false" 
          @plus = "plus(productnum);"
          @minus = "minus(productnum);"
          @inputTest="productnum"
          :productnum="productnum" 
          :modalFlg="modalFlg" 
          :products="products" 
          />
</transition>




<!-- 연습용 모달1 -->
<!-- <div class="bg_color" v-if="modalFlg">
      <div class="bg_incolor">
        <img :src="products[productnum].img">
        <h4>상품명 :{{products[productnum].name}}</h4>
        <p>설명 : {{products[productnum].content }}</p>
        <p>가격 : {{ price(products[productnum].price, products[productnum].count) }} </p>
        <p>수량 : <span>{{ products[productnum].count }}</span><button v-on:click=" products[productnum].count++;">증가</button>
            <button  v-on:click=" products[productnum].count--;">감소</button>
        </p>
        <h4  @click="modalFlg = false">X</h4>
      </div>
    </div> -->
<!-- ---------------------------------------------------------------- -->



  <!-- 테그 안에 반복문 작성 -->
  <div v-for="(item, i) in products" :key="i"> 
  <!-- 모달창 -->
    <!-- <div class="bg_color" v-if="item.modalFlg">
      <div class="bg_incolor">
        <img :src="item.img">
        <h4>상품명 : {{ item.name }}</h4>
        <p>설명 : {{ item.content }}</p>
        <p>가격 : {{ item.price }}</p>
        <p>수량 : <span>{{ item.count }}</span><button @click="plus(i);">증가</button>
          <button  v-on:click="item.count--;">감소</button>
        </p>
        <h4  @click="item.modalFlg = false">X</h4>
      </div>
    </div> -->

    <table>
      <tr>
        <td >
          <img :src="item.img">
          <h4 @click="openmodal(i);">{{ item.name }} </h4>
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
import Nav from './components/Nav.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal.vue';
export default {
  name: 'App',
  data(){ //데이터 바인딩
    return{
      discountNum : 50,
      hookTest: false,
      inputTest:'',
      navList: ['남성몰','|','여성몰','|','MORDEN'],
      modalFlg:false,
      products : data,
      productnum : 0,
      // products: [
      //   {name:'티셔츠', price: '3800', size: 'xl', fac : '강원도', count :'1', img:require('@/assets/tshirt.jpg')} //나의 서버에 있는 이미지를 가져 올때 사용하는 방법
      //   ,{name:'바지', price: '5000', size: 'xxl', fac : '말레이시아', count :'1',img:require('@/assets/pens.jpg') }
      //   ,{name:'점퍼', price: '3800', size: 's', fac : '태국', count :'1', img:require('@/assets/jumper.jpg')}
      // ],
    }
  },
  watch: { //입력된 데이터를 확인해서 실시간으로 감시 해줄수 있는 메소드 - 
    inputTest(input){  //  파라미터 명은 아무거나.
      if( input.includes(3) ){
        alert('3333');
        this.inputTest = '';
      }
    }
  },
  methods : { // 함수를 설정하는 영역
    plus(i){
      this.products[i].count++; //데이터 영역에서 함수 사용시 this를 붙여야 한다. 
    },
    minus(i){
      this.products[i].count--;
    },
    openmodal(i){
      this.productnum = i;
      this.modalFlg = true;
    },

    price(price, count){
      return price * count;
    }
  },
  mounted() {
    let interval = setInterval(()=> 
    {this.discountNum--
      if(this.discountNum === 0){
          clearInterval(interval);
        }
      }
      , 1000);
  },


  components: {
    Nav,
    ProductList,
    Modal,
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
