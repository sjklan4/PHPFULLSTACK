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
            imgfile:'', //이미지 파일
            content:'',
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
        // 작성글 데이터 셋팅용
        addWirteData(state, data){
            state.boardData.unshift(data);
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
        //content
        contentin(state){
            state.filterClass ='';
            state.imgUrl ='';
            state.content ='';
            state.imgfile='';
        },
        changeimg(state, file){
            state.imgfile= file;
        },
        contents(state, content){
            state.content = content;
        }
    },
    actions: {
        // 메인 게시글 습득
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData', res.data);
            })
        },
        // 게시글 추가 습득
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
        },
        // 게시글 작성
        writeContent(context){
            const header = {
                headers:{
                    'Content-type' : 'multipart/form-data',
                }
            };

            axios.post('http://192.168.0.66/api/boards', 

            {
                name:'박상준',
                filter: context.state.filterClass,
                img: context.state.imgfile,
                content: context.state.content,  
            }, 

             header) //데이터를 보내줄때 객체 형식으로 보내 주어야 되서 {}입력
            .then(res => {
                location.reload();
                context.commit('contentin', res.data);
                context.commit('changetabFlg',0);
                // context.commit('addWriteData',res.data);
                // context.commit('clearState');
            })
            .catch(err=>{
                console.log(err);
            })
        },
    }
})

export default store
