@extends('layout')

@section('subTitle')
	로그인
@endsection

@section('content')
<form name="login_form" method="post" action="/users">
	@csrf
	<!-- ID -->
	<div class="form-group row">
		<label for="user_id" class="col-sm-2 col-form-label">아이디</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="user_id" name="user_id" placeholder="아이디를 입력해주세요." required>
		</div>
	</div>
	<!-- PW -->
	<div class="form-group row">
		<label for="user_pw" class="col-sm-2 col-form-label">비밀번호</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="user_pw" name="user_pw" placeholder="비밀번호를 입력해주세요." required>
		</div>
	</div>
	<button type="submit" class="btn btn-primary mb-2" id="login">로그인</button>
</form>
@endsection