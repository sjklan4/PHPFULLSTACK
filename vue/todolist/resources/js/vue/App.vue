<template>
    <div class="container">
        <div>
            <h1>SIMPLEPAGES</h1>
        </div>
        <div>
            <input type="text" id="text">
            <button  @click="$store.dispatch('writeContent')">입력</button>
        </div>
        <br>
        
        <br>
        <hr>
        <ListComponent></ListComponent>
    </div>


</template>


<script>
import ListComponent from './ListComponent/ListComponent.vue'

export default {
    name:"App",
    created() {
        this.$store.dispatch('getList');
    },

  components: {
    ListComponent: ListComponent,
    }
}
</script>

<style>
@import url(../../css/app.css);
</style>