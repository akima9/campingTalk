@extends('layout')

@section('subTitle')
	회원가입
@endsection

@section('content')
<form name="add_user_form" method="post" action="">
	<!-- ID -->
	<div class="form-group row">
		<label for="user_id" class="col-sm-2 col-form-label">아이디</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="user_id" name="user_id" placeholder="아이디를 입력해주세요." required>
			<div class="valid-feedback">
				사용할 수 있는 아이디입니다.
			</div>
			<div class="invalid-feedback">
				아이디는 6~20자의 문자와 숫자로 입력해주세요.
			</div>
		</div>
	</div>
	<!-- PW -->
	<div class="form-group row">
		<label for="user_pw" class="col-sm-2 col-form-label">비밀번호</label>
		<div class="col-sm-10">
			<input type="password" class="form-control is-invalid" id="user_pw" name="user_pw" placeholder="비밀번호를 입력해주세요." required>
			<div class="invalid-feedback">
				Please choose a username.
			</div>
		</div>
	</div>
	<!-- PW confirm -->
	<div class="form-group row">
		<label for="conf_pw" class="col-sm-2 col-form-label">비밀번호 재입력</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="conf_pw" name="conf_pw" placeholder="비밀번호를 다시 한번 입력해주세요." required>
		</div>
	</div>
	<button type="submit" class="btn btn-primary mb-2" id="add_user">회원가입</button>
</form>

<script>
$(document).ready(function(){

	var num_pattern = /[0-9]/; 							// 숫자 
	var str_pattern = /[a-zA-Z]/; 						// 문자 
	var spe_char_pattern = /[~!@#$%^&*()_+|<>?:{}]/; 	// 특수문자

	var id_regExp = /^[a-z0-9_]{6,20}$/;
	
	/* 아이디 입력 시 이벤트 : start */
	$("#user_id").on("keyup",function(){
		
		var _this = $("#user_id");
		var user_id = $("#user_id").val();
		
		/* 아이디 유효성 검사 (문자,숫자 조합 6~20자) : start */
		if (!id_regExp.test(user_id)) {
			_this.removeClass("is-valid");
			_this.addClass("is-invalid");
		} else { // 유효성 검사 통과
			_this.removeClass("is-invalid");
			_this.addClass("is-valid");

			$.ajax({ 
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				type: "post", 
				url : "{{ route('user_id_dupe_check') }}",
				data : {sampleInput : "sampleData"}, 
				success : function(data) { 
					// Sucess시, 처리 
					alert(data); 
				}, 
				error : function(xhr, textStatus, errorThrown){ 
					// Error시, 처리 
					alert(xhr); 
					alert(textStatus); 
					alert(errorThrown); 
				} 
			});//end ajax
		}//end if
		/* 아이디 유효성 검사 (문자,숫자 조합 6~20자) : end */

	});
	/* 아이디 입력 시 이벤트 : end */
	
	/* 회원가입 버튼 클릭 이벤트 : start */
	$("#add_user").on("click",function(){
		var user_id = $("#user_id").val();
		var user_pw = $("#user_pw").val();
		var conf_pw = $("#conf_pw").val();

		/* 유효성 검사 : start */

		/* 유효성 검사 : end */
	});
	/* 회원가입 버튼 클릭 이벤트 : end */

})//end jquery
</script>
@endsection