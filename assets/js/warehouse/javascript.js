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

//submit form-add-pjm
$('#konfirm_tambah').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#pjm').submit();
});

//submit form-add-pjk
$('#tambah_pjk').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#pjk').submit();
});

$(document).ready(function(){
    $('.datepicker').datepicker();
  });

function idEdit(idEdit){
	$('#id_pjm_edit').attr("value",idEdit);
	$('#jmlproduk-edit').attr("value",$('#'+idEdit).data('jumlah'));
	
}
//delete penyimpanan
function idDelete (idDelete){
	$('#id_produk_jadi_masuk_delete')
	.attr("value",idDelete);

	console.log(idDelete);
	
}
//submit form-delete-pjm
$('#submit-delete-pjm').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-pjm').submit();
});

//delete pengiriman
function getidDelete (idDelete){
	$('#id_pjk_delete')
	.attr("value",idDelete);

	console.log(idDelete);
	
}
//submit form-delete-pjm
$('#submit-delete-pjk').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-pjk').submit();
});

//delete surat jalan dpj
function idDel(idDelete){
	$('#id_sjdpj_delete')
	.attr("value",idDelete);

	console.log(idDelete);
	
}
//submit form-delete-dpj
$('#submit-delete-sjdpj').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-delete-sjdpj').submit();
});

