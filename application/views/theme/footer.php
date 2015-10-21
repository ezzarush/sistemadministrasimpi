<script src="<?php echo base_url();?>assets/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url();?>assets/js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.tn3lite.min.js"></script>
<script src="<?php echo base_url();?>assets/js/magnific.js"></script>
<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
<?php
if(!empty($_SESSION['statusLogin'])){
	if($_SESSION['statusLogin']=='berhasil'){
		?>
		$("#loginForm").modal();
		$("#captionSukses").html("<font align='center' color='blue'>Success, Please Wait ... </font> <br><div align='center'><img align='center' width=150px;' src='<?php echo base_url();?>assets/images/progress_bar.gif'></div>");
		setTimeout(function(){window.location.replace("<?php echo base_url();?>")},1200);
		<?php
	}else if($_SESSION['statusLogin']=='gagalAktif'){
		?>
		$("#loginForm").modal();
		$("#lblStatusLogin").html("<font color='red'>Akun Anda Belum Aktif, Silakan Hubungi Admin Sistem</font>");
		<?php
	}else{
		?>
		$("#loginForm").modal();
		$("#lblStatusLogin").html("<font color='red'>Username atau Password Anda Salah, Silakan Coba Lagi</font>");
		<?php
	}
}
if(!empty($_SESSION['statusDaftar'])){
	if($_SESSION['statusDaftar']=='berhasil'){
		?>
		$("#loginDaftar").modal();
		$("#captionDaftar").html("<div align='center'><font align='center'  size='3' color='blue'>Registrasi Berhasil, Harap Tunggu Admin Approve Registrasi Anda :)</font><br><br></div>");
		setTimeout(function(){window.location.replace("<?php echo base_url();?>")},2200);
		<?php
	}else{
		?>
		$("#loginDaftar").modal();
		$("#captionDaftar").html("<font color='red'>Registrasi Gagal, Silakan Ulangi Kembali</font>");
		<?php
	}
}
?>
$(document).ready(function(){
	$("#tableSuratMasuk").DataTable();
	$('.datepicker').datepicker();
	
		
	//setInterval(waktuJam,200);
		
	var tn1 = $('.mygallery').tn3({
		skinDir:"skins",
		imageClick:"fullscreen",
		image:{
		maxZoom:1.5,
		crop:true,
		clickEvent:"dblclick",
		transitions:[{
		type:"blinds"
		},{
		type:"grid"
		},{
		type:"grid",
		duration:460,
		easing:"easeInQuad",
		gridX:1,
		gridY:8,
		// flat, diagonal, circle, random
		sort:"random",
		sortReverse:false,
		diagonalStart:"bl",
		// fade, scale
		method:"scale",
		partDuration:360,
		partEasing:"easeOutSine",
		partDirection:"left"
		}]
		}
				});
	
})

$('.test-popup-link').magnificPopup({
  type: 'image'
  // other options
});

function ubah_status_akun(param){
	var a = confirm("Ubah Status Level Pengguna?");
		if(a==true){
			$.post("<?php echo base_url('pengaturanPengguna/ubahStatus');?>",{id:param,status:"LP"})
			.done(function(resp){
				alert("Berhasil");
				setTimeout(function(){window.location.replace("<?php echo base_url();?>pengaturanPengguna")},300);
			})
		}else{
			//alert("T");
		}
}	

function ubah_status_aktif(param){
		var a = confirm("Ubah Status Aktif?");
		if(a==true){
			$.post("<?php echo base_url('pengaturanPengguna/ubahStatus');?>",{id:param,status:"SA"})
			.done(function(resp){
				alert("Berhasil");
				setTimeout(function(){window.location.replace("<?php echo base_url();?>pengaturanPengguna")},300);
			})
		}else{
			//alert("T");
		}
		
	}

function edit_sm(param){
	$.post("<?php echo base_url('surat/get_surat_masuk');?>",{param:param})
			.done(function(resp){
				var obj = $.parseJSON(resp);
				$("#txtSM_id_surat_masuk").val(obj[0]['id_surat_masuk']);
				
				$("#txtSM_Perihal").val(obj[0]['perihal']);
				$("#txtSM_perusahaan").val(obj[0]['perusahaan']);
				$("#txtSM_pengirim").val(obj[0]['pengirim']);
				$("#txtSM_email").val(obj[0]['email_pengirim']);
				$("#txtSM_tglMasuk").val(obj[0]['tgl_masuk']);
				
				//alert(obj[0]['perihal']);
				//console.log(obj);
				//document.location.href="<?php echo base_url('panel');?>";
				
			})
	$("#formEditDataSuratMasuk").modal();
}

function edit_sk(param){
	$.post("<?php echo base_url('surat/get_surat_keluar');?>",{param:param})
			.done(function(resp){
				var obj = $.parseJSON(resp);
				$("#txtSK_id_surat_keluar").val(obj[0]['id_surat_keluar']);
				
				$("#txtSK_Perihal").val(obj[0]['perihal']);
				$("#txtSK_dokumen").val(obj[0]['no_surat_keluar']);
				$("#txtSK_tanggal").val(obj[0]['tgl_kirim']);
				$("#txtSK_tujuan").val(obj[0]['tujuan']);
				if(obj[0]['jenis_dokumen']=='Asli'){
					$("#txtSK_jenisdok").html("<option>-- pilih jenis dokumen --</option><option value='Asli' selected>Asli</option><option value='Copy'>Copy</option><option value='Copy Legalisir'>Copy Legalisir</option>");
				}else if(obj[0]['jenis_dokumen']=='Copy'){
					$("#txtSK_jenisdok").html("<option>-- pilih jenis dokumen --</option><option value='Asli' selected>Asli</option><option value='Copy' selected>Copy</option><option value='Copy Legalisir'>Copy Legalisir</option>");
				}else{
					$("#txtSK_jenisdok").html("<option>-- pilih jenis dokumen --</option><option value='Asli'>Asli</option><option value='Copy' selected>Copy</option><option value='Copy Legalisir' selected>Copy Legalisir</option>");
				}
				
			})
	$("#formEditDataSuratKeluar").modal();
}

function edit_notulen(param){
	$.post("<?php echo base_url('notulen/get_notulen');?>",{param:param})
			.done(function(resp){
				//alert(resp);
				var obj = $.parseJSON(resp);
				
				$("#idNotulenForm").val(obj[0]['id_notulen']);
				
				$("#idNotulenPerihal").val(obj[0]['deskripsi']);
				$("#idNotulenNoBerkasSurat").val(obj[0]['no_berkas_surat']);
				$("#idNotulenTanggal").val(obj[0]['tgl_notulen']);
				
				//$("#idNotulenJenisDokumen").val(obj[0]['email_pengirim']);
				$("#idNotulenKeterangan").html(obj[0]['keterangan']);
				if(obj[0]['jenis_dokumen']=='Asli'){
					$("#idNotulenJenisDokumen").html("<option>-- pilih jenis dokumen --</option><option value='Asli' selected>Asli</option><option value='Copy'>Copy</option><option value='Copy Legalisir'>Copy Legalisir</option>");
				}else if(obj[0]['jenis_dokumen']=='Copy'){
					$("#idNotulenJenisDokumen").html("<option>-- pilih jenis dokumen --</option><option value='Asli' selected>Asli</option><option value='Copy' selected>Copy</option><option value='Copy Legalisir'>Copy Legalisir</option>");
				}
				
				//alert(obj[0]['perihal']);
				//console.log(obj);
				//document.location.href="<?php echo base_url('panel');?>";
				
			});
	$("#formEditNotulen").modal();
}

function edit_galeri(param){
	$.post("<?php echo base_url('pengaturanGaleri/get_galeri');?>",{param:param})
			.done(function(resp){
				//alert(resp);
				var obj = $.parseJSON(resp);
				
				$("#idGaleri").val(obj[0]['id_galeri']);
				
				$("#idNama_Foto").val(obj[0]['nama_foto']);
				$("#idNotulenKeterangan").val(obj[0]['keterangan']);
				
			});
}

function edit_artikel(param){
	$.post("<?php echo base_url('pengaturanArtikel/get_artikel');?>",{param:param})
			.done(function(resp){
				//alert(resp);
				var obj = $.parseJSON(resp);
				
				$("#idArtikel").val(obj[0]['id_artikel']);
				
				$("#idJudul").val(obj[0]['judul_artikel']);
				$("#idArtikelKeterangan").val(obj[0]['isi']);
				
			});
}

function lihat_artikel(param){
	$.post("<?php echo base_url('pengaturanArtikel/get_artikel');?>",{param:param})
			.done(function(resp){
				//alert(resp);
				var obj = $.parseJSON(resp);
				
				//$("#idArtikel").val(obj[0]['id_artikel']);
				
				$("#idJudulArtikel").html("<p>"+obj[0]['judul_artikel']+"</p>");
				$("#idIsiArtikel").html("<p>"+obj[0]['isi']+"</p>");
				
			});
}

function hapus_sm(param){
	$("#txtIDSMHapus").val(param);
}

function hapus_sk(param){
	$("#txtIDSKHapus").val(param);
}

function hapus_notulen(param){
	$("#txtIDNotulenHapus").val(param);
}

function hapus_galeri(param){
	$("#txtIDGaleriHapus").val(param);
}

function hapus_artikel(param){
	$("#txtIDArtikelHapus").val(param);
}
		
</script>
<!-- /SL Slider -->
</body>
</html>