@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Edit Data Kategori</h3></center>
	<center><a href="{{ url('category') }}">kembali</a></center>
	<form action="{{ url('/category/' . $row->cat_id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#ff69b4" align="center">
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="cat_name" value="{{ $row->cat_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="cat_text" value="{{ $row->cat_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection