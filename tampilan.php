<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background: #fffacd;
			background-image: url("hijau.png");
		}

		.header {
			padding: 30px;
			text-align: center;
			background: white
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.fakeimg {
			background-color: #aaa;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #ddd;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body>

	<div class="header" style="background-color: darkseagreen;">
		<h1 style="font-family: serif;">SELAMAT DATANG DI WEBSITE BRILIAN</h1>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color: darkseagreen;">
				<h2 style="font-family: Times New roman">Brilian Permata Zulfa</h2>
				<h4>Mahasiswi Prodi Informatika<br>Universitas Ahmad Dahlan</h4>
				<div>
					<img src="fotobrilian.jpg" width="300px">
				</div>
			</div>
		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: seagreen;">
				<h2 align="center" style="font-family: courier;">Tugas Akhir Pemrograman Web</h2><br><br>

				<div style="background-color: darkseagreen;">
					<img src="pemrograman.jpg" width="690px" height="350px">
					<div align="center"><strong><font size="6" face="courier New, courier,mono">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td><h4>Nama</h4></td>
					    <td><input style="background-color:darkseagreen;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:darkseagreen;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>E-mail</h4></td>
					    <td><input style="background-color:darkseagreen;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4>Prodi</h4></td>
					<td><select style="background-color:darkseagreen;" name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Psikologi</option>
						<option>Kesehatan Masyarakat</option>
						<option>Teknik Kimia</option>
						<option>Teknik Elektro</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:darkseagreen;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:darkseagreen;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			<div class="card" style="background-color: seagreen;">
				<h1><center style="font-family:courier ;">Kalkulator</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>

			<div class="card" style="background-color: darkseagreen;">
				<h1><center style="font-family: courier;">Kalender<br>Juli 2022</center></h1>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>
                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: seagreen;">
                    <td align=center><font color="#FF0000">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>

		<div class="rightcolumn">
			<div class="card" style="background-color: darkseagreen;">
				<h2 style="font-family: Times New Roman">About Me</h2>
				<p>Hallo! Perkenalkan, Saya Brilian Permata Zulfa, biasa dipanggil Brilian. Saya lahir di Klaten, 13 Desember 2002, Saya adalah anak bungsu dari dua bersaudara<br><br>
				Saat ini, Saya menempuh pendidikan di Universitas Ahmad Dahlan Jurusan Informatika. Saya menemukan ketertarikan dibidang Informatika. Teknologi saat ini semakin maju dan berkembang. Maka dari itu, Saya ingin mengembangkan kemampuan ini, agar kedepannya teknologi di Indonesia semakin baik</p>
			</div>

			<div class="card" style="background-color: darkseagreen;">
		    <h3>Social Media</h3>
		    <img src="instagram.png" width="45px">
		    <a href="https://www.instagram.com/brilianpz/">brilianpz</a><br><br>
		     <img src="facebook.webp" width="45px">
		     <a href="https://www.facebook.com/brilianpermataz/">Brilian Permata</a><br><br>
		    <img src="twitter.png" width="45px">
		    <a href="https://twitter.com/brilianpz">brilianpz
	       </div></a>
		</div>
</div>   
     <div class="footer" style="background-color: darkseagreen;">
     	<h2>Terima Kasih Sudah Berkunjung</h2>
     	<p></p>
     </div>

</body>
</html>