@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="menu-register">
			<div class="panel-heading">Menu</div>
			<div class="panel-body">
				<ul>
					<li><a href="/bn/benhdtd">Biểu mẫu cập nhật Đái tháo đường</a></li>
					<li><a href="/bn/benhtha">Biểu mẫu cập nhật Tăng huyết áp</a></li>
					<li><a href="/bn/dsBs">Đăng ký bác sĩ</a></li>
				</ul>
			</div>
        </div>
		<div class="col-md-8 col-md-offset-2-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cập nhật Tăng huyết áp</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/bn/benhtha') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Ngày</label>
							<div class="col-md-6">
								<input type="date" class="form-control" name="ngay">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Huyết áp</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="huyetAp">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Cân nặng</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="canNang">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Chiều cao</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="chieuCao">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Tình trạng sức khỏe</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="tinhTrang">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Thuốc lá, thuốc lào</label>
							<div class="col-md-6">
								<input type="radio" name="tl" value="y" checked="checked"> Có
								<input type="radio" name="tl" value="n"> Không
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Rượu, bia</label>
							<div class="col-md-6">
								<input type="radio" name="r" value="y" checked="checked"> Có
								<input type="radio" name="r" value="n"> Không
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Bạn đã ăn gì trong khoảng 2 tiếng trước</label>
							<div class="col-md-6">
								<textarea class="form-control" name="an" rows="8"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Bạn có vận động quá sức trong vòng 1h trước</label>
							<div class="col-md-6">
								<textarea class="form-control" name="vd" rows="3"></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Cập nhật
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
