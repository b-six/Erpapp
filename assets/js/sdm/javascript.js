// tabs-trigger
$(document).ready(function () {
	$('.tabs').tabs();
});

// dropdwon-trigger
$(".dropdown-trigger").dropdown();

// modals-trigger
$(document).ready(function () {
	$('.modal').modal();
});

//select ded
$(document).ready(function () {
	$('.datepicker').datepicker();
});

// select-form-trigger
$(document).ready(function () {
	$('select').formSelect();
});

// select time
$(document).ready(function () {
	$('.timepicker').timepicker();
});


//submit form add SO
$('#submit-add-so').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-so').submit();
});

//membuat list data sales order dapat diklik dan diarahkan ke shopping cart
$(".clickable-row").click(function () {
	window.location = $(this).data("href");
});

//show harga satuan produk, jumlah, total harga dan gambar produk pada add sc
$("#id_produk").change(function () {
	var id_produk = $("#id_produk").val();
	var harga_satuan = $("#" + id_produk).val();
	$("#harga_satuan")
		.attr("value", harga_satuan)
});

$("jumlah_barang").keypress(function () {
	$('#total_harga').val($('#jumlah_barang').val() * $('#' + id_produk).val());
});

var $output2 = $("#total_harga");
$("#jumlah_barang").keyup(function () {
	var value = parseFloat($(this).val());
	var harga_satuan1 = $("#harga_satuan").val();
	$output2.val(value * harga_satuan1);
});

//submit form-add-item-sc
$('#submit-add-sc').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-item-sc').submit();
});

// show wilayah dan tipe pegawai
$("#id_pegawai").change(function () {
	var id_pegawai = $("#id_pegawai").val();
	var wilayah = $("#" + id_pegawai).val();
	var tipe_pegawai = $("#x" + id_pegawai).val();
	$("#show-wilayah")
		.attr("value", wilayah);
	$("#show-tipe-pegawai")
		.attr("value", tipe_pegawai)
});

//submit form-add-pegawai
$('#submit-add-pegawai').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-pegawai').submit();
});

//show nama, wilayah dan tipe pegawai pada form add-testimoni
$("#id_so").change(function () {
	var id_pegawai = $("#id_so").val();
	var nama = $("#nama-" + id_pegawai).val();
	var wilayah = $("#wilayah-" + id_pegawai).val();
	var tipe_pegawai = $("#tipe-" + id_pegawai).val();
	$("#show-nama")
		.attr("value", nama);
	$("#show-wilayah")
		.attr("value", wilayah);
	$("#show-tipe-pegawai")
		.attr("value", tipe_pegawai)
});

//submit form-add-testimoni
$('#submit-add-testimoni').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-testimoni').submit();
});

//untuk nampilin dan nyembunyiin tombol di tabel
$("#table-button").css("display", "none");
$('tr').on('mouseover mouseout', function () {
	$(this).find('#table-button').toggle();
});

//untuk nampilin dan nyembunyiin tombol di card view
$(document).ready(function () {
	$(document).on('mouseenter', '.card-content', function () {
		$(this).find("#card-button").show();
	}).on('mouseleave', '.card-content', function () {
		$(this).find("#card-button").hide();
	})
})

// $('.card-content').on('mouseover mouseout', function(){
// 	$(this).find('#card-button').toggle();
// });

//submit form-add-po
$('#submit-add-po').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-po').submit();
});


/////////////////////////////////
//submit form add PB
$('#submit-add-pb').click(function () {
	// when the submit button in the modal is clicked, submit the form
	// alert("sukses");
	$('#form-add-pb').submit();
});

//Script buat ngecrop gambar ====================================================================================
//buat ngapus gambar terupload dan load ulang croppie.js
// $('.foto').on('click', function(){
// 	$('.file-selector').hide();
// 	$('.btn-crop').show();
// 	$('#cropped').remove();
// 	$('.croppie-container').removeClass('croppie-container').addClass('image-crop-view');
// 	$uploadCrop = $('.image-crop-view').croppie({
// 		enableExif: true,
// 		viewport:{
// 			width: 200,
// 			height: 200,
// 		},
// 		boundary: {
// 			width: 230,
// 			height: 230
// 		}
// 	});
// });
// //setelah file dipilih lakukan perubahan
// $('.foto').on('change', function(){
// 	var reader = new FileReader();

// 	reader.onload = function (e) {
// 		$uploadCrop.croppie('bind', {
// 			url: e.target.result
// 		}).then(function(){
// 			console.log('jQuery bind complete');
// 		});
// 	}
// 	reader.readAsDataURL(this.files[0]);
// });
// //buat ngerotate croppie.js
// $('.rotate').on('click', function(ev){
// 	uploadCrop.croppie('rotate', parseInt($(this).data('deg')));
// });
// //taruh hasil croppan dalam frame hasil crop, sama taruh base64 codenya di input text
// $('.btn-crop').on('click', function (ev){
// 	$uploadCrop.croppie('result', {
// 		type: 'canvas',
// 		size: 'viewport'
// 	}).then(function (resp){
// 		html = '<img id="cropped" src="' + resp + '" />';
// 		alert('sukses');
// 		$(".image-crop-view").html(html);
// 		$('.file-selector').show();
// 		$('.btn-crop').hide();
// 		$('.tampilan-foto').val(resp);
// 	});
// });
//===============================================================================================================

// //ngupload file foto hasil crop croppie.js ke server via ajax
// $('.upload-result').on('click', function (ev){
// 	var url_simpan = $('#nama-tampilanProduk').data('url_simpan');
// 	console.log(url_simpan);
// 	$uploadCrop.croppie('result', {
// 		type: 'canvas',
// 		size: 'viewport'
// 	}).then(function (resp){
// 		//sent file via ajax and return data
// 		$.ajax({
// 			// url: '../../index.php/Erpapp/marketing/produk_baru/uploadGambar',
// 			url: url_simpan,
// 			type: "POST",
// 			data: {"image":resp},
// 			success: function (data) {
// 				html = '<img id="cropped" src="' + resp + '" />';
// 				alert('sukses');
// 				$("#image-view").html(html);
// 				$('.file-selector').show();
// 				$('.upload-result').hide();
// 				$('#nama-tampilanProduk').val(data);
// 			},
// 			error: function (e){
// 				alert('error');
// 			}
// 		});
// 	});
// });

//Script buat ngecrop gambar edit =================================================================================
//buat ngapus gambar terupload dan load ulang croppie.js
// $('.foto-edit').on('click', function(){
// 	$('.file-selector').hide();
// 	$('.btn-crop-edit').show();
// 	$('#cropped').remove();
// 	$('.croppie-container').removeClass('croppie-container').addClass('image-crop-view-edit');
// 	$uploadCrop = $('.image-crop-view-edit').croppie({
// 		enableExif: true,
// 		viewport:{
// 			width: 200,
// 			height: 200,
// 		},
// 		boundary: {
// 			width: 230,
// 			height: 230
// 		}
// 	});
// });
// //setelah file dipilih lakukan perubahan
// $('.foto-edit').on('change', function(){
// 	var reader = new FileReader();

// 	reader.onload = function (e) {
// 		$uploadCrop.croppie('bind', {
// 			url: e.target.result
// 		}).then(function(){
// 			console.log('jQuery bind complete');
// 		});
// 	}
// 	reader.readAsDataURL(this.files[0]);
// });
// //buat ngerotate croppie.js
// $('.rotate').on('click', function(ev){
// 	uploadCrop.croppie('rotate', parseInt($(this).data('deg')));
// });
// //taruh hasil croppan dalam frame hasil crop, sama taruh base64 codenya di input text
// $('.btn-crop-edit').on('click', function (ev){
// 	$uploadCrop.croppie('result', {
// 		type: 'canvas',
// 		size: 'viewport'
// 	}).then(function (resp){
// 		html = '<img id="cropped" src="' + resp + '" />';
// 		alert('sukses');
// 		$(".image-crop-view-edit").html(html);
// 		$('.file-selector').show();
// 		$('.btn-crop-edit').hide();
// 		$('.tampilan-foto').val(resp);
// 	});
// });
//===============================================================================================================

//hapus produk baru
$('.del-pb-trigger').on('click', function () {
	var id_barang = $(this).data('id_barang');

	console.log(id_barang);
	$(document).ready(function () {
		$('#del-pb-modal').modal('open');
	});
	var oldUrl = $('#del-pb-button').data('href');
	var newUrl = oldUrl + id_barang;

	$('#del-pb-button').attr('href', newUrl);
});

//edit produk baru
$('.edit-pb-trigger').on('click', function () {
	var id_barang = $(this).data('id_barang');

	var nama_produk = $(this).data('nama');
	var jenis_produk = $(this).data('jenis');
	var harga_produk = $(this).data('harga');
	var file_desain = $(this).data('file_desain');
	var foto = $(this).data('foto');
	var tampil_link = $(this).data('tampil_link');

	$(document).ready(function () {
		$('#edit-pb-modal').modal('open');
	});
	$('.id_barang').val(id_barang);
	$('.nama-edit').val(nama_produk);
	$('.jenis-edit').val(jenis_produk);
	$('.harga-edit').val(harga_produk);

	$('.file_desain-edit').val(file_desain);

	newUrl = tampil_link + foto;

	html = '<img id="cropped" src="' + newUrl + '" />';

	$('.image-crop-view-edit').html(html);
});

//submit form edit Promo
$('#submit-edit-pb').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-pb').submit();
});


//image reader add ==============================================
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#banner-preview').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$('#banner-promo').change(function () {
	readURL(this);
});
//==============================================================

// edit promo
$('.edit-promo-trigger').on('click', function () {
	var id_promo = $(this).data('id_promo');
	var produk = $(this).data('produk');
	var jumlah_pembelian = $(this).data('jumlah_pembelian');
	var banner_promo = $(this).data('banner_promo');
	var oldUrl = $(this).data('tampil_link');

	$(document).ready(function () {
		$('#edit-promo-modal').modal('open');
	});

	$('#id_promo-edit').val(id_promo);
	$('#produk-edit').val(produk);
	$('#jumlah_pembelian-edit').val(jumlah_pembelian);

	var newUrl = oldUrl + banner_promo;
	console.log(newUrl);

	$('#banner-preview-edit').attr('src', newUrl);
});

//image reader edit promo
function readEditedURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#banner-preview-edit').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$('#banner-promo-edit').change(function () {
	readEditedURL(this);
});

//hapus Promo
$('.del-promo-trigger').on('click', function () {
	var id_promo = $(this).data('id_promo');

	$(document).ready(function () {
		$('#del-promo-modal').modal('open');
	});

	var oldUrl = $('#del-promo-button').data('href');
	var newUrl = oldUrl + id_promo;

	$('#del-promo-button').attr('href', newUrl);
});

//submit form edit Promo
$('#submit-edit-promo').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-promo').submit();
});

// // show wilayah dan tipe pegawai pada modal edit so
$("#id_pegawai-edit").change(function () {
	var id_pegawai = $("#id_pegawai-edit").val();
	var wilayah = $("#" + id_pegawai).val();
	var tipe_pegawai = $("#x" + id_pegawai).val();
	$("#show-wilayah-edit")
		.attr("value", wilayah);
	$("#show-tipe-pegawai-edit")
		.attr("value", tipe_pegawai)
});

//get id ketika klik tombol edit, kemudian id di pass ke modal edit
function getIdEdit_pegawai_1(clicked_id) {
	// var id_edit = clicked_id;
	// $("#id_so_edit").attr("value", id_edit);
	// var id_pegawai = $("#id_pegawai_edit-" + id_edit).val();
	// $("#nama-pegawai")
	// 	.attr("value", nama_pegawai)
	// 	.css("font-weight", "bold");
	// $("#id_so_edit")
	// 	.css("font-weight", "bold");
	// $("#option-" + id_pegawai).attr("selected", "");
	var id_split = clicked_id.split("_");
	var id_pegawai = id_split[2];
	var nama_pegawai = $("#id_pegawai_" + id_pegawai).data("nama_pegawai");
	var id_golongan = $("#id_pegawai_" + id_pegawai).data("id_golongan");
	var id_pendidikan = $("#id_pegawai_" + id_pegawai).data("id_pendidikan");
	var umur = $("#id_pegawai_" + id_pegawai).data("umur");
	var alamat = $("#id_pegawai_" + id_pegawai).data("alamat");
	var email = $("#id_pegawai_" + id_pegawai).data("email");
	var rekening_pegawai = $("#id_pegawai_" + id_pegawai).data("rekening_pegawai");
	var no_telp = $("#id_pegawai_" + id_pegawai).data("no_telp");
	// var file_desain = $(this).data('file_desain');
	var foto = $("#id_pegawai_" + id_pegawai).data('foto');
	// console.log(foto);
	var tampil_link = $("#id_pegawai_" + id_pegawai).data('tampil_link');

	newUrl = tampil_link + foto;
	console.log(newUrl);



	$('#id_pegawai-edit').attr("value", id_pegawai);
	$('#nama_pegawai-edit').attr("value", nama_pegawai);
	$('#alamat-edit').attr("value", alamat);
	$('#email-edit').attr("value", email);
	$('#umur').attr("value", umur);
	$('#rekening_pegawai-edit').attr("value", rekening_pegawai);
	$('#no_telp-edit').attr("value", no_telp);
	$('#banner-preview-edit').attr('src', newUrl);
	// alert(alamat)
}

function test() {
	alert('huheuh');
}

//submit form-edit-so
$('#submit-edit-so').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-so').submit();
});

//get id untuk hapus SO
function getIdDelete(clicked_id) {
	var id_delete = clicked_id;
	$("#id_so_delete")
		.attr("value", id_delete);
}

//submit form-delete-so
$('#submit-delete-so').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-so').submit();
});

//get Id untuk edit SC
function getIdEdit_SC(id_sc) {
	$("#id_sc-edit")
		.attr("value", id_sc);
	var total_harga = $("#" + id_sc).data('total_harga');
	var id_so_edit = $("#" + id_sc).data('id_so_edit');
	var jumlah_barang_now = $("#" + id_sc).data('jumlah_barang_now');
	$("#jumlah_barang_now")
		.attr("value", jumlah_barang_now);
	$("#total_harga-before")
		.attr("value", total_harga);
	$("#id_so-edit")
		.attr("value", id_so_edit);
}

//show harga satuan produk, jumlah, total harga pada shopping cart
$("#id_produk-edit").change(function () {
	var id_produk = $("#id_produk-edit").val();
	var harga_satuan = $("#" + id_produk).val();
	$("#harga_satuan-edit")
		.attr("value", harga_satuan)
});

$("jumlah_barang-edit").keypress(function () {
	$('#total_harga-edit').val($('#jumlah_barang-edit').val() * $('#' + id_produk).val());
});

var $output = $("#total_harga-edit");
$("#jumlah_barang-edit").keyup(function () {
	var value = parseFloat($(this).val());
	var harga_satuan1 = $("#harga_satuan-edit").val();
	$output.val(value * harga_satuan1);
});

//submit form-edit-item-sc
$('#submit-edit-sc').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-item-sc').submit();
});

//get id untuk form edit PO
function getIdEdit_PO(id_po) {
	$("#id_po-edit")
		.attr("value", id_po);
}

//submit form-edit-po
$('#submit-edit-po').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-po').submit();
});

//get id untuk hapus SO
function getIdDelete_PO(clicked_id) {
	var id_delete = clicked_id;
	$("#id_po_delete")
		.attr("value", id_delete);
}

//submit form-edit-po
$('#submit-delete-po').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-po').submit();
});

//submit form-edit-sc
$('#submit-edit-sc').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-item-sc').submit();
});

//get id untuk hapus SC
function deleteSC(clicked_id) {
	var clickedSplit = clicked_id.split("_");
	var id_sc = clickedSplit[2];
	$("#id_sc_delete")
		.attr("value", id_sc);
	var x = $("#" + id_sc).data('id_so_edit');
	$("#id_so_delete")
		.attr("value", x);
	$("#jumlah_barang_so")
		.attr("value", ($("#" + id_sc).data('jumlah_barang_so')));
	$("#jumlah_barang_item")
		.attr("value", ($("#" + id_sc).data('jumlah_barang_now')));
	$("#harga_item")
		.attr("value", ($("#" + id_sc).data('total_harga')));
	$("#harga_so")
		.attr("value", ($("#" + id_sc).data('harga_so')));
}

//submit form-delete-sc
$('#submit-delete-sc').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-sc').submit();
});

//get id untuk edit pegawai
function getIdEdit_pegawai(clicked_id) {
	var clickedSplit = clicked_id.split("_");
	var id_pegawai = clickedSplit[2];
	$("#id_pegawai-edit")
		.attr("value", id_pegawai);
	$("#nama_pegawai-edit")
		.attr("value", ($("#id_pegawai_" + id_pegawai).data('nama_pegawai')));
	$("#wilayah-edit")
		.attr("value", ($("#id_pegawai_" + id_pegawai).data('wilayah_pegawai')));
}

//submit form-edit-pegawai
$('#submit-edit-pegawai').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-pegawai').submit();
});

//get id untuk delete pegawai
function getId_pegawai(clicked_id) {
	var Split = clicked_id.split("_");
	var id_pegawai = Split[2];
	$("#id_pegawai_delete")
		.attr("value", id_pegawai);
}

//submit form-delete-pegawai
$('#submit-delete-pegawai').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-pegawai').submit();
});

//get id untuk edit testimoni
function getIdEdit_test(test_edit_id) {
	y = test_edit_id.split("_");
	id_so = y[2];
	$("#id_so-edit")
		.attr("value", id_so);
	$("#show-nama-edit")
		.attr("value", $("#get-nama-" + id_so).val());
	$("#show-wilayah-edit")
		.attr("value", $("#get-wilayah-" + id_so).val());
	$("#show-tipe-pegawai-edit")
		.attr("value", $("#get-tipe-" + id_so).val());
	$("#id_test-edit")
		.attr("value", $("#" + test_edit_id).data('id_test'));
}

//submit form-edit-test
$('#submit-edit-test').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-test').submit();
});

//get id untuk delete testimoni
function getIdDelete_test(test_delete_id) {
	z = test_delete_id.split("_");
	id_testimoni = z[1];
	$("#id_test_delete")
		.attr("value", id_testimoni);
	$("#id_so_delete_test")
		.attr("value", $("#" + test_delete_id).data('id_so'));
}

//submit form-delete-test
$('#submit-delete-test').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-test').submit();
});
//submit add-pegawai form
$('#submit-add-pegawai').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-pegawai').submit();
});

//tampilkan validasi data gaji
function validasiTampil(clicked_id) {

	$('#nama_pegawai_valid')
		.attr("value", $('#' + clicked_id).data('nama_pegawai'));
	$('#periode')
		.attr("value", $('#' + clicked_id).data('periode'));
	$('#golongan')
		.attr("value", $('#' + clicked_id).data('golongan'));
	$('#gaji_pokok')
		.attr("value", $('#' + clicked_id).data('gaji_pokok'));
	$('#gaji_lembur')
		.attr("value", $('#' + clicked_id).data('gaji_lembur'));
	$('#pengurangan')
		.attr("value", $('#' + clicked_id).data('pengurangan_gaji'));
	$('#total')
		.attr("value", $('#' + clicked_id).data('total_gaji'));
	var id_splitx = clicked_id.split("_");
	var id_gaji = id_splitx[1];
	$('#id_gaji').attr('value', id_gaji);
}
//submit form-validasi gaji disetujui
$('#setuju-button').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#status_gaji').attr("value", 'disetujui');
	$('#form-validasi-gaji').submit();
});

//submit form-validasi gaji ditolak
$('#tolak-button').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#status_gaji').attr("value", 'ditolak');
	$('#form-validasi-gaji').submit();
});