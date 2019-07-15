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

// select-form-trigger
$(document).ready(function () {
	$('select').formSelect();
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

//show harga satuan produk, jumlah, total harga dan gambar produk
$("#id_produk").change(function () {
	var id_produk = $("#id_produk").val();
	var harga_satuan = $("#" + id_produk).val();
	$("#harga_satuan")
		.attr("value", harga_satuan)
});

$("jumlah_barang").keypress(function () {
	$('#total_harga').val($('#jumlah_barang').val() * $('#' + id_produk).val());
});

var $output = $("#total_harga");
$("#jumlah_barang").keyup(function() {
    var value = parseFloat($(this).val());
    var harga_satuan1 = $("#harga_satuan").val();
    $output.val(value*harga_satuan1);
});

//submit form-add-item-sc
$('#submit-add-sc').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-item-sc').submit();
});

// show wilayah dan tipe customer
$("#id_pelanggan").change(function () {
	var id_pelanggan = $("#id_pelanggan").val();
	var wilayah = $("#" + id_pelanggan).val();
	var tipe_customer = $("#x" + id_pelanggan).val();
	$("#show-wilayah")
		.attr("value", wilayah);
	$("#show-tipe-customer")
		.attr("value", tipe_customer)
});

//submit form-add-customer
$('#submit-add-customer').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-customer').submit();
});

//show nama, wilayah dan tipe customer pada form add-testimoni
$("#id_so").change(function () {
	var id_pelanggan = $("#id_so").val();
	var nama = $("#nama-" + id_pelanggan).val();
	var wilayah = $("#wilayah-" + id_pelanggan).val();
	var tipe_customer = $("#tipe-" + id_pelanggan).val();
	$("#show-nama")
		.attr("value", nama);
	$("#show-wilayah")
		.attr("value", wilayah);
	$("#show-tipe-customer")
		.attr("value", tipe_customer)
});

//submit form-add-testimoni
$('#submit-add-testimoni').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-testimoni').submit();
});

//untuk nampilin dan nyembunyiin tombol di tabel
$("#table-button").css("display", "none");
$('tr').on('mouseover mouseout', function(){
	$(this).find('#table-button').toggle();
});

//untuk nampilin dan nyembunyiin tombol di card view
$(document).ready(function(){
	$(document).on('mouseenter', '.card-content', function(){
		$(this).find("#card-button").show();
	}).on('mouseleave', '.card-content', function(){
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
$('.tampilan_produk').on('click', function(){
	$('.file-selector').hide();
	$('.btn-crop').show();
	$('#cropped').remove();
	$('.croppie-container').removeClass('croppie-container').addClass('image-crop-view');
	$uploadCrop = $('.image-crop-view').croppie({
		enableExif: true,
		viewport:{
			width: 200,
			height: 200,
		},
		boundary: {
			width: 230,
			height: 230
		}
	});
});
//setelah file dipilih lakukan perubahan
$('.tampilan_produk').on('change', function(){
	var reader = new FileReader();

	reader.onload = function (e) {
		$uploadCrop.croppie('bind', {
			url: e.target.result
		}).then(function(){
			console.log('jQuery bind complete');
		});
	}
	reader.readAsDataURL(this.files[0]);
});
//buat ngerotate croppie.js
$('.rotate').on('click', function(ev){
	uploadCrop.croppie('rotate', parseInt($(this).data('deg')));
});
//taruh hasil croppan dalam frame hasil crop, sama taruh base64 codenya di input text
$('.btn-crop').on('click', function (ev){
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp){
		html = '<img id="cropped" src="' + resp + '" />';
		alert('sukses');
		$(".image-crop-view").html(html);
		$('.file-selector').show();
		$('.btn-crop').hide();
		$('.hasil-tampilan-produk').val(resp);
	});
});
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
$('.tampilan_produk-edit').on('click', function(){
	$('.file-selector').hide();
	$('.btn-crop-edit').show();
	$('#cropped').remove();
	$('.croppie-container').removeClass('croppie-container').addClass('image-crop-view-edit');
	$uploadCrop = $('.image-crop-view-edit').croppie({
		enableExif: true,
		viewport:{
			width: 200,
			height: 200,
		},
		boundary: {
			width: 230,
			height: 230
		}
	});
});
//setelah file dipilih lakukan perubahan
$('.tampilan_produk-edit').on('change', function(){
	var reader = new FileReader();

	reader.onload = function (e) {
		$uploadCrop.croppie('bind', {
			url: e.target.result
		}).then(function(){
			console.log('jQuery bind complete');
		});
	}
	reader.readAsDataURL(this.files[0]);
});
//buat ngerotate croppie.js
$('.rotate').on('click', function(ev){
	uploadCrop.croppie('rotate', parseInt($(this).data('deg')));
});
//taruh hasil croppan dalam frame hasil crop, sama taruh base64 codenya di input text
$('.btn-crop-edit').on('click', function (ev){
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp){
		html = '<img id="cropped" src="' + resp + '" />';
		alert('sukses');
		$(".image-crop-view-edit").html(html);
		$('.file-selector').show();
		$('.btn-crop-edit').hide();
		$('.hasil-tampilan-produk').val(resp);
	});
});
//===============================================================================================================

//hapus produk baru
$('.del-pb-trigger').on('click', function(){
	var id_barang = $(this).data('id_barang');

	console.log(id_barang);
	$(document).ready(function(){
		$('#del-pb-modal').modal('open');
	});
	var oldUrl = $('#del-pb-button').data('href');
	var newUrl = oldUrl+id_barang;

	$('#del-pb-button').attr('href', newUrl);
});

//edit produk baru
$('.edit-pb-trigger').on('click', function(){
	var id_barang = $(this).data('id_barang');

	var nama_produk = $(this).data('nama');
	var jenis_produk = $(this).data('jenis');
	var harga_produk = $(this).data('harga');
	var file_desain = $(this).data('file_desain');
	var tampilan_produk = $(this).data('tampilan_produk');
	var tampil_link = $(this).data('tampil_link');

	$(document).ready(function(){
		$('#edit-pb-modal').modal('open');
	});
	$('.id_barang').val(id_barang);
	$('.nama-edit').val(nama_produk);
	$('.jenis-edit').val(jenis_produk);
	$('.harga-edit').val(harga_produk);

	$('.file_desain-edit').val(file_desain);

	newUrl = tampil_link+tampilan_produk;

	html = '<img id="cropped" src="' + newUrl + '" />';

	$('.image-crop-view-edit').html(html);
});

//submit form edit Promo
$('#submit-edit-pb').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-pb').submit();
});


//image reader add ==============================================
function readURL(input){
	if(input.files && input.files[0]){
		var reader = new FileReader();

		reader.onload = function(e){
			$('#banner-preview').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$('#banner-promo').change(function(){
	readURL(this);
});
//==============================================================

// edit promo
$('.edit-promo-trigger').on('click', function(){
	var id_promo = $(this).data('id_promo');
	var produk = $(this).data('produk');
	var jumlah_pembelian = $(this).data('jumlah_pembelian');
	var banner_promo = $(this).data('banner_promo');
	var oldUrl = $(this).data('tampil_link');

	$(document).ready(function(){
		$('#edit-promo-modal').modal('open');
	});

	$('#id_promo-edit').val(id_promo);
	$('#produk-edit').val(produk);
	$('#jumlah_pembelian-edit').val(jumlah_pembelian);

	var newUrl = oldUrl+banner_promo;
	console.log(newUrl);

	$('#banner-preview-edit').attr('src', newUrl);
});

//image reader edit promo
function readEditedURL(input){
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e){
			$('#banner-preview-edit').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$('#banner-promo-edit').change(function(){
	readEditedURL(this);
});

//hapus Promo
$('.del-promo-trigger').on('click', function(){
	var id_promo = $(this).data('id_promo');

	$(document).ready(function(){
		$('#del-promo-modal').modal('open');
	});

	var oldUrl = $('#del-promo-button').data('href');
	var newUrl = oldUrl+id_promo;

	$('#del-promo-button').attr('href', newUrl);
});

//submit form edit Promo
$('#submit-edit-promo').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-promo').submit();
});

// // show wilayah dan tipe customer pada modal edit so
$("#id_pelanggan-edit").change(function () {
	var id_pelanggan = $("#id_pelanggan-edit").val();
	var wilayah = $("#" + id_pelanggan).val();
	var tipe_customer = $("#x" + id_pelanggan).val();
	$("#show-wilayah-edit")
		.attr("value", wilayah);
	$("#show-tipe-customer-edit")
		.attr("value", tipe_customer)
});

//get id ketika klik tombol edit, kemudian id di pass ke modal edit so
function getIdEdit(clicked_id) {
	var id_edit = clicked_id;
	$("#id_so_edit").attr("value", id_edit);
	var id_pelanggan = $("#id_pelanggan_edit-" + id_edit).val();
	var nama_pelanggan = $("#nama_pelanggan_edit-" + id_edit).val();
	$("#nama-customer")
		.attr("value", nama_pelanggan)
		.css("font-weight", "bold");
	$("#id_so_edit")
		.css("font-weight", "bold");
	$("#option-" + id_pelanggan).attr("selected", "");

	var id_pelanggan = $("#id_pelanggan-edit").val();
	var wilayah = $("#" + id_pelanggan).val();
	var tipe_customer = $("#x" + id_pelanggan).val();
	$("#show-wilayah-edit")
		.attr("value", wilayah);
	$("#show-tipe-customer-edit")
		.attr("value", tipe_customer)
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

//get id untuk edit customer
function getIdEdit_cust(clicked_id) {
	var clickedSplit = clicked_id.split("_");
	var id_pelanggan = clickedSplit[2];
	$("#id_pelanggan-edit")
		.attr("value", id_pelanggan);
	$("#nama_pelanggan-edit")
		.attr("value", ($("#id_pelanggan_" + id_pelanggan).data('nama_cust')));
	$("#wilayah-edit")
		.attr("value", ($("#id_pelanggan_" + id_pelanggan).data('wilayah_cust')));
}

//submit form-edit-customer
$('#submit-edit-cust').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-edit-cust').submit();
});

//get id untuk delete customer
function getId_cust(clicked_id) {
	var Split = clicked_id.split("_");
	var id_pelanggan = Split[2];
	$("#id_cust_delete")
		.attr("value", id_pelanggan);
}

//submit form-delete-customer
$('#submit-delete-cust').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-cust').submit();
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
	$("#show-tipe-customer-edit")
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
