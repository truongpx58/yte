@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="menu-register">
			<div class="panel-heading">Đăng ký</div>
			<div class="panel-body">
				<ul>
					<li><a href="/dangkybn">Đăng ký bệnh nhân</a></li>
					<li><a href="/dangkybs">Đăng ký bác sĩ</a></li>
				</ul>
			</div>
        </div>
		<div class="col-md-8 col-md-offset-2-1">
			<div class="panel panel-default">
				<div class="panel-heading">Đăng ký bệnh nhân</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Lỗi!</strong> Có lỗi xảy ra trong quá trình đăng ký <br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ route('postDangkybn') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Tên tài khoản</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="taiKhoan" value="{{ old('taiKhoan') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Mật khẩu</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nhập lại mật khẩu</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Họ và tên</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="hoTen">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số cmnd/thẻ căn cước</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="cmnd">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Đăng ký
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
