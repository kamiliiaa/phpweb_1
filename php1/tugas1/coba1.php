<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <div class="bg-primary p-5">
		<h1 class="text-center text-white">Student Value Form</h1>
	</div>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form role="form">
				<div class="form-group">
					 
					<label for="">
						Nama
					</label>
					<input type="text" name="nama" value="" class="form-control">
				</div>

				<div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>

				<div class="form-group">
				
				<label for="">Mata Kuliah</label>
                <select class="form-select form-control" name="matkul" value="" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web Programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statistika">Statiska</option>
                    <option value="PPkn">PPkn</option>
                    <option value="UI/UX">UI/UX</option>
				</select>
				</div>

				<div class="form-group" action="index.php" method="get">
					<label for="">Nilai Tugas</label>
					<input type="text" name="nilai_tugas" value="" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Nilai UTS</label>
					<input type="text" name="nilai_uts" value="" class="form-control">
				</div>
		 
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>

				<div class="checkbox">
					 
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
			<?php
				$nama = $_GET['nama'];
				$nim = $_GET['nim'];
				$matkul = $_GET['matkul'];
				$nilai_tugas = $_GET['nilai_tugas'];
				$nilai_uts = $_GET['nilai_uts'];
				$nilai_uas = $_GET['nilai_uas'];
				
				$total = $nilai_tugas + $nilai_uts + $nilai_uas;
				$hasil = $total / 3;

				if($hasil >= 85){
					$abjad = "A";
				}
				elseif($hasil >= 80 && $hasil <= 84){
					$abjad = "B";
				}
				elseif($hasil >= 60 && $hasil <= 80){
					$abjad = "C";
				}
				elseif($hasil >= 40 && $hasil <= 60){
					$abjad = "D";
				}
				else{
					$abjad = "E";
				}

			?>
		<div class="col-3 mt-3">
			<div class="card" style="width: 18rem;">
				<div class="card-header bg-primary text-white">
				Result
				</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Nama : <?php echo $nama?></li>
				<li class="list-group-item">NIM : <?php echo $nim?></li>
				<li class="list-group-item">Mata Kuliah : <?php echo $matkul?></li>
				<li class="list-group-item"> Nilai Tugas : <?php echo $nilai_tugas?></li>
				<li class="list-group-item">Nilai UTS : <?php echo $nilai_uts?></li>
				<li class="list-group-item">Nilai UAS : <?php echo $nilai_uas?></li>
				<li class="list-group-item"> Hasil Nilai : <?php echo $hasil?></li>
				<li class="list-group-item">Nilai Alphabet : <?php echo $abjad?></li>				
			</ul>
			</div>
		</div>

		<div class="col-3 mt-3">
			<div class="card" style="width: 18rem;">
				<div class="card-header bg-primary text-white">
				Nilai
				</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">A : 85 - 100</li>
				<li class="list-group-item">B : 70 - 84 :</li>
				<li class="list-group-item">C : 60 - 79</li>
				<li class="list-group-item">D : 40 - 59 </li>
				<li class="list-group-item">E : Kurang dari 40 </li>
			</ul>
			</div>
		</div>

	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>