<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Hobi</title>
        <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
	</head>
    
	<body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="card-header">
                        <a href="/"> <- Kembali </a>
                    </div>
                    <br/>

                    {{-- menampilkan pesan error validasi --}}

                    {{-- menampilkan error validasi --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <fieldset>
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <table cellpadding=3>
                                <tr>
                                    <td>Nama</td>
                                    <td>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" maxlength="25" class="form-control" value="{{ old('nama') }}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>
                                        <div class="col-sm-10">
                                            <input type="text" name="hobi" maxlength="25" class="form-control" value="{{ old('hobi') }}"></td>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="col-sm">
                                            <input class="btn btn-md btn-success" type="submit" value="Simpan">
                                        </div>
                                    </td>	
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
	</body>
</html>
