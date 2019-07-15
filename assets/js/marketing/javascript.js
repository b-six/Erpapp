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
$('tr').on('mouseover mouseout', function () {
	$(this).find('#table-button').toggle();
});

//submit form-add-po
$('#submit-add-po').click(function () {
	/* when the submit button in the modal is clicked, submit the form */
	$('#form-add-po').submit();
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
