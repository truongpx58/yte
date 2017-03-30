@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="menu-register">
			<div class="panel-heading">Menu</div>
			<div class="panel-body">
				<ul>
					<li><a href="/..">Danh sach benh nhan</a></li>
					<li><a href="/..">Cap nhat thong tin</a></li>
				</ul>
			</div>
        </div>
		<div class="col-md-8 col-md-offset-2-1">
			<div class="panel panel-default">
				<div class="panel-heading">Danh sách bệnh nhân</div>
				<div class="panel-body">
					<table class="list_table">
						<tr class="list_heading">
							<td class="list_name">Họ và tên</td>
							<td>Bệnh đái tháo đường</td>
							<td>Bệnh tăng huyết áp</td>
						</tr>
						@foreach($data as $item)
						<tr class="list_data">
							<td>{!! $item["hoTen"] !!}</td>
							<td><a href="{!! $url = route('getBenhNhanList', ['id' => $item["id"]]) !!}"><img src="{!! asset('\public\admin\templates\images\doctor.png') !!}"></a></td>
							<td><a href="/"><img src="{!! asset('\public\admin\templates\images\add_doctor.png') !!}"></a></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
