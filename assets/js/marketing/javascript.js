$(document).ready(function(){
    $('.tabs').tabs();
  });
$(".dropdown-trigger").dropdown();

//untuk nampilin dan nyembunyiin tombol di tabel
function showButton(){
	document.getElementById("table-button").classList.add('active');
}

function hideButton(){
	document.getElementById("table-button").classList.remove('active');
}