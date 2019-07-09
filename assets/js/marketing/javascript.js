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

//buat ngapus gambar terupload dan load ulang croppie.js
$('#tampilan_produk').on('click', function(){
	$('.file-selector').hide();
	$('.upload-result').show();
	$('#cropped').remove();
	$('.croppie-container').removeClass();
	$uploadCrop = $('#image-view').croppie({
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
$('#tampilan_produk').on('change', function(){
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

//ngupload file foto hasil crop croppie.js ke server via ajax
$('.upload-result').on('click', function (ev){
	var url_simpan = $('#nama-tampilanProduk').data('url_simpan');
	console.log(url_simpan);
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp){
		$.ajax({
			// url: '../../index.php/Erpapp/marketing/produk_baru/uploadGambar',
			url: url_simpan,
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				html = '<img id="cropped" src="' + resp + '" />';
				alert('sukses');
				$("#image-view").html(html);
				$('.file-selector').show();
				$('.upload-result').hide();
				$('#nama-tampilanProduk').val(data);
			},
			error: function (e){
				alert('error');
			}
		});
	});
});

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
	console.log(id_barang);

	var nama_produk = $(this).data('nama');
	var jenis_produk = $(this).data('jenis');
	var harga_produk = $(this).data('harga');
	var file_desain = $(this).data('file_desain');
	var tampilan_produk = $(this).data('tampilan_produk');


	$(document).ready(function(){
		$('#edit-pb-modal').modal('open');
	});

	$('.nama-edit').val(nama_produk);
	$('.jenis-edit').val(jenis_produk);
	$('.harga-edit').val(harga_produk);

	$('.file_desain-edit').val(file_desain);
	$('.tampilan_produk-edit').val(tampilan_produk);

});

//image reader==================================================
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

$('.edit-promo-trigger').on('click', function(){
	var id_promo = $(this).data('id_promo');
	var produk = $(this).data('produk');
	var jumlah_pembelian = $(this).data('jumlah_pembelian');
	var banner_promo = $(this).data('banner_promo');

	$(document).ready(function(){
		$('#edit-promo-modal').modal('open');
	});

	$('#id_promo-edit').val(id_promo);
	$('#produk-edit').val(produk);
	$('#jumlah_pembelian-edit').val(jumlah_pembelian);
	$('banner_promo-edit').val(banner_promo);
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