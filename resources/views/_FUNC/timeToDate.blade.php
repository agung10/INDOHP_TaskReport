<?php
function timeToDate($tanggal){
	$bulan = array (
		1 =>   'January',
		'February',
		'March',
		'April',
		'Mei',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}