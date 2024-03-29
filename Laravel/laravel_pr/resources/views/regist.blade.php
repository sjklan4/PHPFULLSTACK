<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/regist.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-md-6"><h1><img src="/application/view/imgfile/title.PNG" class="title_img"></h1></div>
        <div class="col-md-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/application/view/imgfile/pagein/account_img/kor5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/application/view/imgfile/pagein/account_img/northeuro1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/application/view/imgfile/pagein/account_img/northeuro2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </div>

  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
    
        <div class="col-6 col-md-6">
            <h1>회원 가입</h1>
        <!--if로 작성-->
        <?php if(isset($this->errMsg)){ ?>
            <div>
                <span> <?php echo $this->errMsg ?></span>
            </div>
        <?php } ?>
        <form action="/user/regist" method = "post">
          <ul>
            <li><input type="text" placeholder = "아이디를 입력" name ="u_id" id ="u_id" >
            <span id="errMsgId">
                <?php 
                if(isset($this->arrError["u_id"])){ 
                    echo $this->arrError["u_id"];
                } 
                ?>
            </span>
            </li>
            <button type="button" onclick = "chkDuplicationID();">중복체크</button>

            <li><input type="password" placeholder = "비밀번호 입력" name ="u_pw" id = "u_pw"></li>
            <?php if(isset($this->arrError["u_pw"])){ ?>
                    <span><?php echo $this->arrError["u_pw"] ?></span>
            <?php } ?>
            <li><input type="password" placeholder = "비밀번호 확인" name ="u_pwchk" id ="u_pwchk"></li>
            <?php if(isset($this->arrError["u_pwchk"])){ ?>
                    <span><?php echo $this->arrError["u_pwchk"] ?></span>
            <?php } ?>
            <li><input type="text" placeholder = "이름" name ="member_name" id="member_name" ></li>
            <?php if(isset($this->arrError["member_name"])){ ?>
                    <span><?php echo $this->arrError["member_name"] ?></span>
            <?php } ?>
            <li><input type="text" placeholder = "전화번호" name ="phone_number" id="phone_number" ></li>
            <li><input type="text" placeholder = "주소" name ="address" id="address" ></li>
            <br><button tpye = "submit">가입</button>
            </ul>
            </form>
        </div>

        <div class="col-6 col-md-6">
            <div class ="naver_acc">네이버 아이디로 회원가입</div><br>
            <div class = "kakao_acc">카카오 계정으로 회원가입</div>
        </div>
    </div>

  <!-- Columns are always 50% wide, on mobile and desktop -->
    <div class="row">
        <div class="col-6">.col-6</div>
        <div class="col-6">.col-6</div>
    </div>
</div>

<script src="/application/view/js/regist.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>