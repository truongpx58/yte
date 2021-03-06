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
				<div class="panel-heading">Chi tiết bác sĩ</div>
				<div class="panel-body">
					<table class="list_table">
						<tr class="list_heading">
							<td class="list_name">Họ và tên</td>
							<td>Nghề nghiệp</td>
							<td>Chuyên ngành</td>
							<td>Số điện thoại</td>
						</tr>
						@foreach($data as $item)
						<tr class="list_data">
							<td>{!! $item["hoTen"] !!}</td>
							<td>{!! $item["ngheNghiep"] !!}</td>
							<td>{!! $item["chuyenNganh"] !!}</td>
							<td>{!! $item["sdt"] !!}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
