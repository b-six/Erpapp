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

$uploadCrop = $('#upload-demo').croppie({
	enableExif: true,
	viewport:{
		width: 200,
		height: 200,
	},
	boundary: {
		width: 300,
		height: 300
	}
});

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

$('.upload-result').on('click', function (ev){
	event.preventDefault();
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp){
		$.ajax({
			url: '../../index.php/Erpapp/marketing/produk_baru/upload',
			type: "POST",
			data: {"image":resp},
			success: function (response) {
				console.log(response.imageData);
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
			},
			error: function (e){
				html = '<img src="' + resp + '" />';
				$("#upload-demo-i").html(html);
				console.log('error');
			}
		});
	});
});


/////////////////////////////////////////////////
// $('.upload-result').on('click', function (ev){
// 	$uploadCrop.croppie('result', {
// 		type: 'canvas',
// 		size: 'viewport'
// 	}).then(function (resp){
// 		$.ajax({
// 			url: "produk_baru/uploadGambar",
// 			type: "POST",
// 			data: {"image":resp},
// 			success: function (data) {
// 				html = '<img src="'+ resp + '" />';
// 				$("#upload-demo-i").html(html);
// 			}
// 		});
// 	});
// });

// kirim gambar dengan php
//ambil nama file
// passing ke javascript
// masukin ke input form

// $('#submit-add-pb').click(function () {
// 	// when the submit button in the modal is clicked, submit the form
// 	// alert("sukses");
// 	$('#form-add-pb').submit(function(e){
// 		e.preventDefault();
// 			$.ajax({
// 					url:'<?php echo base_url(); ?>marketing/produk_baru/uploadGambar',
// 					type:"post",
// 					data:new FormData(this),
// 					processData:false,
// 					contentType:false,
// 					cache:false,
// 					async:false,
// 						success: function(data){
// 							alert("Upload Sukses");
// 						},
// 						error: function(data){
// 							alert("upload Gagal")
// 						}
// 			});
// 		});
// });