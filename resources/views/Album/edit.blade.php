@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Edit Album </h3></center>
	<center>Kembali :<a href="{{ url('album') }}"> Back</a></center>
	<form action="{{ url('/album/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#5F9EA0" align="center">
		<tr>
			<td>PHOTO ID</td>
			<td><input type="text" name="album_pho_id" value="{{ $row->album_pho_id}}"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="{{ $row->album_name}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="album_text" value="{{ $row->album_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection