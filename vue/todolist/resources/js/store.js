import { createStore } from "vuex";
import axios from "axios";

const store = createStore({
    state(){
        return{
            boardData: [],
        }
    },

    mutations: {
        createBoardData(state, data){
            state.boardData = data;
        },

        addWirteData(state, data){
            state.boardData.unshift(data);
        },
        delWriteData(state, id){
            state.boardData = state.boardData.filter(item => item.id !== id);
        },
        chkWirteData(state, { id, completed }) {
            const item = state.boardData.find(item => item.id === id);
            if (item) {
                item.completed = completed;
            }
        },
    
    },
    actions: {
        getList(context){
            axios.get('/api/items')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData', res.data);
            })
        },
        writeContent(context){
        
            const text = document.getElementById('text');
            const data = {
                "item" : {
                    "content": text.value
                }
            }
            axios.post('/api/items',data)
            .then(res => {
                location.reload();
                context.commit('addWriteData',res.data);

                // context.commit('clearState');
            })
            .catch(err=>{
                console.log(err);
            })
        },
        delContent(context, id){
            axios.delete(`/api/items/${id}`)
                .then(res => {
                    location.reload();
                    context.commit('delWriteData', res.id);
                })
                .catch(err=>{
                    console.log(err);
                })
        },

        updateContent(context, { id, completed }) {
            const data = {
                "item" : {
                    "completed": completed ? 1:0
                }
            }
            axios.put('/api/items/' + id, data)
            .then(res => {
                console.log(res);
                context.commit('chkWirteData', res.id);
            })
            .catch(err => {
                console.log(err);
            })
        }
    },



})

export default store