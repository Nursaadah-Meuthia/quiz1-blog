@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Edit Data Photo</h3></center>
	<center><a href="{{ url('photo') }}">kembali</a></center>
	<form action="{{ url('/photo/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#ff69b4" align="center">
		<tr>
			<td>POST ID</td>
			<td><input type="text" name="pho_post_id" value="{{ $row->pho_post_id}}"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="pho_date" value="{{ $row->pho_date}}"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="pho_tittle" value="{{ $row->pho_tittle}}"></td>
		</tr>

		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="pho_text" value="{{ $row->pho_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection