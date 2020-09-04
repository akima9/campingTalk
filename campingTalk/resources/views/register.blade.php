@extends('layout')

@section('subTitle')
	회원가입
@endsection

@section('content')
<form name="add_user_form" method="post" action="/users">
	@csrf
	<!-- ID -->
	<div class="form-group row">
		<label for="user_id" class="col-sm-2 col-form-label">아이디</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="user_id" name="user_id" placeholder="아이디를 입력해주세요." required>
			<!-- <div class="valid-feedback">
				사용할 수 있는 아이디입니다.
			</div>
			<div class="invalid-feedback">
				아이디는 6~20자의 문자와 숫자로 입력해주세요.
			</div> -->
		</div>
	</div>
	<!-- PW -->
	<div class="form-group row">
		<label for="user_pw" class="col-sm-2 col-form-label">비밀번호</label>
		<div class="col-sm-10">
			<!-- 유효성 검사에 성공하면 is-valid class 추가, 실패하면 is-invalid class 추가 -->
			<input type="password" class="form-control" id="user_pw" name="user_pw" placeholder="비밀번호를 입력해주세요." required>
			<!-- <div class="invalid-feedback">
				Please choose a username.
			</div> -->
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
@endsection