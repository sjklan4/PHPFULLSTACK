<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php ardisan make:migration create_boards_table 설정한 이름(ex : create_boards_talbe)
    // migration 실행 :(모든 migration 파일의 up()메소드를 실행) : php artisan migrate
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migrate:reset - 데이터 복구 불가 
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일자, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment ()안이 비어 있으면 디폴트 값 id로 컬럼 지정
            $table->char('category', 1)->index(); // char(1), not null, index추가 카테고리 테이블의 번호를 기준으로 join할 예정 
            $table->string('btitle', 100); //varchar(100)으로 생성, not null기본 
            $table->string('bcontent',4000); // varchar는 4000자가 최대치 이다. 
            $table->timestamps(); //created_at, updated_at를 생성해주는 구문 null 허용 
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg',1)->default('0'); //문자열인지 숫자인지 중요! char(1), default '0', not null
        });
    }






    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
