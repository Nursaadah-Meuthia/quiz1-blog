@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Edit Data Post</h3></center>
	<center><a href="{{ url('post') }}">kembali</a></center>
	<form action="{{ url('/post/' . $row->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf

	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#ff69b4" align="center">
		<tr>
			<td>KATEGORI ID</td>
			<td><input type="text" name="post_cat_id" value="{{ $row->post_cat_id}}"></td>
		</tr>

		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="post_date" value="{{ $row->post_date}}"></td>
		</tr>

		<tr>
			<td>SLUG</td>
			<td><input type="text" name="post_slug" value="{{ $row->post_slug}}"></td>
		</tr>

		<tr>
			<td>JUDUL</td>
			<td><input type="text" name="post_tittle" value="{{ $row->post_tittle}}"></td>
		</tr>


		<tr>
			<td>KETERANGAN</td>
			<td><input type="text" name="post_text" value="{{ $row->post_text}}"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td> 
		</tr>
	</table>
	</form>
</div>
@endsection