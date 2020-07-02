@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Input Data Album</h3></center>
	<center>Kembali :<a href="{{ url('album') }}"> Back</a></center>
	<form method="post" action="{{url('/album')}}">
	@csrf
		<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
			<tr>
				<td>PHOTO ID</td>
				<td><input type="text" name="album_pho_id" class="form-control"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="album_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="album_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection