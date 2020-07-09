@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Input Data Photo</h3></center>
	<center><a href="{{ url('photo') }}">kembali</a></center>
	<form method="post" action="{{url('/photo')}}">
	@csrf
		<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#ff69b4" align="center">
			<tr>
				<td>POST ID</td>
				<td><input type="text" name="pho_post_id" class="form-control"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="pho_date" class="form-control"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="pho_tittle" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="pho_text" class="form-control"></td>
			</tr>

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection