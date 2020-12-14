<html>
    <head>
        <title>Program Pajak</title>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="pajak2.php">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                      </ul>
                    </div>
             </nav>
        </div>

        <div id="isi">
		<div class="posisi">
            <form id="myform" action="koneksi2.php" method="post">
			<div class="form-group">
				<label for="exampleInput">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama User" required>
            </div>
            <div class="form-group">
				<label for="exampleInput">Kendaraan</label>
				<input type="text" class="form-control" id="kendaraan" name="kendaraan" placeholder="Masukan Jenis Kendaraan User" required>
            </div>
            <div class="form-group">
				<label for="exampleInput">Plat Nomor</label>
				<input type="text" class="form-control" id="plat" name="plat_nomor" placeholder="Masukan Plat Nomor Kendaraan User" required>
            </div>
            <div class="form-group">
				<label for="exampleInput">Nomor Rangka</label>
				<input type="number" class="form-control" id="rangka" name="nomor_rangka" placeholder="Masukan Nomor Rangka Kendaraan User" required>
            </div>
            <div class="form-group">
				<label for="exampleInput">Nominal</label>
				<input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukan Nominal Pajak Kendaraan User" required>
			</div>
			<div class="form-group">
				<label for="exampleInput">Keterangan</label>
				<select class="form-control" id="keterangan" name="keterangan">
					<option>Lunas</option>
					<option>Belum Lunas</option>
				</select>
			</div>
            <center>
            <button type="submit" name="submit" class="btn btn-secondary">Simpan</button>
            </center>
            </form>
            </div>

            <div id="content">
            <div class="letak">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kendaraan</th>
                            <th scope="col">Plat Nomor</th>
                            <th scope="col">Nomor Rangka</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col"<center>Aksi</center></th>
                        </tr>
                    </thead>
                <tbody id="tabel">
                </tbody>
            </table>

            </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function(){
                    loadData();

                    $('form').on('submit',function(e){
                        popup();
                        e.preventDefault();
                        $.ajax({
                            type:$(this).attr('method'),
                            url:$(this).attr('action'),
                            data:$(this).serialize(),
                            success:function(data){
                                loadData();
                                resetForm();
                            }
                        })
                    })
                })
                function loadData(){
                    $.get('data.php',function(data){
                        $('#tabel').html(data)
                        $('.updateData').click(function(e){
                            e.preventDefault();
                            $('[name=nama]').val($(this).attr('nama'));
                            $('[name=kendaraan]').val($(this).attr('kendaraan'));
                            $('[name=plat_nomor]').val($(this).attr('plat_nomor'));
                            $('[name=nomor_rangka]').val($(this).attr('nomor_rangka'));
                            $('[name=nominal]').val($(this).attr('nominal'));
                            $('[name=keterangan]').val($(this).attr('keterangan'));
                            $('form').attr('action',$(this).attr('href'));
                        })
                    })
                }
                function popup(){
                    alert("Berhasil Menginput Data");
                }

                function resetForm(){
                    $('[type=text]').val('');
                    $('[type=number]').val('');
                    $('[name=nama]').focus();
                    $('form').attr('action','koneksi2.php');
                }
            </script>

            <div id="footer">
            <hr>
            <center>Tentang Kami<br>
               Hubungi No. Tlpn +6281238514819
              <br> Jln Kenangan No. 1 Mataram
            </center>
            </div>
        </div>
        </form>
    </div>
</body>
</html>