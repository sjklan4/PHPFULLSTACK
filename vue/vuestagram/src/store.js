import{createStore} from 'vuex'
import axios from 'axios'

const store = createStore({
    state(){
        return{
            boardData: [], //게시글 데이터 부분
            lastId: '', //가장 마지막에 로드된 게시물의 ID
            flg: true,  // 더보기 버튼 표시용flg
            tabFlg: 0,  // 텝UI flg(0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            filterClass: '',
            changeTabeflg: 0,
        
        }
    },
    mutations: { // mutations는 변경후 저장하는 특징이 있다.
        createBoardData(state, data){
            state.boardData = data;
            this.commit('changeLastId', data[data.length -1].id);
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data){
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        //Lastid변경
        changeLastId(state, id){
            state.lastId = id;
        },
        // 텝UI flg 변경
        changetabFlg(state, num){
            state.tabFlg = num;
        },
        //이미지 URL변경
        changeImgUrl(state, imgUrl){
            state.imgUrl = imgUrl;
        },
        //이미지 필터작업
        filterImg(state, filterClass){
            state.filterClass = filterClass;
        },
        //필터 초기화
        cancelFilter(state){
            state.filterClass = '';
            state.imgUrl = '';
        },

    },
    actions: {
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                console.log(res.data);
                context.commit('createBoardData', res.data);
            })
        },
        getMoreList(context){
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData', res.data);
                }
                else{
                    context.state.flg = false;
                    alert('더 없다.');
                }
                
            })
            .catch(err => {
                console.log(err);
            })
        
        }
    }
})

export default store
