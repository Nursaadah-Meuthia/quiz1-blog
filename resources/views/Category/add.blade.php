@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Input Data Kategori</h3></center>
	<center>Kembali :<a href="{{ url('category') }}"> Back</a></center>
	<form method="post" action="{{url('/category')}}">
	@csrf
		<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="cat_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="cat_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection