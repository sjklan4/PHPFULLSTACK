<template>
    <div class = "post" v-for="item in $store.state.boardData" :key="item">
        <div class="post-content">
            <p><input type="checkbox" id="chk" v-model="item.completed" @change="$store.dispatch('updateContent', { id: item.id, completed: item.completed })">{{ item.content }} <button @click="$store.dispatch('delContent',item.id)">삭제</button></p>
        </div>
    </div>
</template>
<script>
export default {
    name:'ListComponent'
}
</script>
<style lang="">
    
</style>