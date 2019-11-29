<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('array_pilihan'))
{
	function array_pilihan($var, $pilihan, $terpilih, $js=""){
		print "<select name='$var' id='$var' onChange='$js' class='form-control'>";
		echo "<option value=''></option>";
		foreach ($pilihan as $key => $value) {
			if ($key == $terpilih)
				print "<option value='$key' selected>$value</option>";
			else
				print "<option value='$key'>$value</option>";
		}
		print "</select>";
	}
	
	
}
if ( ! function_exists('array_pilihan4'))
{
	function array_pilihan4($var, $pilihan, $terpilih, $js=""){
		print "
		<select name='$var' id='$var' onChange='$js' class='select-produk'>";
		echo "<option value=''></option>";
		foreach ($pilihan as $key => $value) {
			if ($key == $terpilih)
				print "<option value='' disabled selected>Pilih</option><option value='$key' selected>$value</option>";
			else
				print "<option value='' disabled selected>Pilih</option><option value='$key'>$value</option>";
		}
		print "<label>Materialize Select</label></select>";
	}
	
	
}
if ( ! function_exists('array_pilihan2'))
{
	function array_pilihan2($var, $pilihan, $terpilih, $js=""){
		print "<select name='$var' id='$var' onChange='$js' class='text_input'>";
		echo "<option value=''></option>";
		foreach ($pilihan as $value) {
			if ($value == $terpilih)
				print "<option value='$value' selected>$value</option>";
			else
				print "<option value='$value'>$value</option>";
		}
		print "</select>";
	}
	
	
}

if ( ! function_exists('array_pilihan3'))
{
	function array_pilihan3($var, $pilihan, $terpilih, $js=""){
		print "<select name='$var' id='$var' onChange='$js' class='form-control'>";
	
		foreach ($pilihan as $value) {
			if ($value == $terpilih)
				print "<option value='$value' selected>$value</option>";
			else
				print "<option value='$value'>$value</option>";
		}
		print "</select>";
	}
	
	
}


if ( ! function_exists('combo_tanggal'))
{
	function combo_tanggal($name_tgl, $name_bln, $name_thn, $tanggal, $awal, $akhir){
		$get_tgl = substr($tanggal,8,2);
		echo "<select name='$name_tgl' id='$name_tgl' class='text_input' style='width:50px'>";
		echo "<option value=''></option>";
		for($tgl=1; $tgl < 32; $tgl++){
			if ($tgl < 10){
				$tgl = "0".$tgl;	
			} else {
				$tgl = $tgl;
			}

			if ($tgl == $get_tgl){
				echo "<option value='".$tgl."' selected>".$tgl."</option>";
			} else {
				echo "<option value='".$tgl."'>".$tgl."</option>";
			}
		}
		echo "</select>&nbsp;";
		
		$nama_bulan = array (1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktobet","November", "Desember");
		$get_bln = substr ($tanggal,5,2);
		echo "<select name='$name_bln' id='$name_bln' class='text_input' style='width:100px;'>";
		echo "<option value=''></option>";
		for($bln=1; $bln < 13; $bln++){
			if ($bln < 10){
				$xbln = "0".$bln;	
			} else {
				$xbln = $bln;
			}
			if ($xbln == $get_bln){
				echo "<option value='".$xbln."' selected>".$nama_bulan[$bln]."</option>";
			} else {
				echo "<option value='".$xbln."'>".$nama_bulan[$bln]."</option>";
			}
		}
		echo "</select>&nbsp;";
		
		$get_thn = substr($tanggal,0,4);
		$tahun = date("Y") - $akhir;
		echo "<select name='$name_thn' id='$name_thn' class='text_input'>";
		echo "<option value=''></option>";
		for($thn = $tahun; $thn > $awal; $thn--){
			if ($thn == $get_thn){
				echo "<option value='".$thn."' selected>".$thn."</option>";
			} else {
				echo "<option value='".$thn."'>".$thn."</option>";
			}
		}
		echo "</select>&nbsp;";
	}
	
}

if ( ! function_exists('combo_bulan'))
{
	function combo_bulan($name_bln, $tanggal){
		$nama_bulan = array (1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktobet","November", "Desember");
		$get_bln = $tanggal;
		echo "<select name='$name_bln' id='$name_bln' class='text_input'>";
		echo "<option value=''></option>";
		for($bln=1; $bln < 13; $bln++){
			if ($bln < 10){
				$xbln = "0".$bln;	
			} else {
				$xbln = $bln;
			}
			if ($xbln == $get_bln){
				echo "<option value='".$xbln."' selected>".$nama_bulan[$bln]."</option>";
			} else {
				echo "<option value='".$xbln."'>".$nama_bulan[$bln]."</option>";
			}
		}
		echo "</select>&nbsp;";
	}
	
}

if ( ! function_exists('combo_tahun'))
{
	function combo_tahun($name_thn, $tanggal, $awal, $akhir){
		$get_thn = $tanggal;
		$tahun = date("Y") - $akhir;
		echo "<select name='$name_thn' id='$name_thn' class='text_input'>";
		echo "<option value=''></option>";
		for($thn = $tahun; $thn > $awal; $thn--){
			if ($thn == $get_thn){
				echo "<option value='".$thn."' selected>".$thn."</option>";
			} else {
				echo "<option value='".$thn."'>".$thn."</option>";
			}
		}
		echo "</select>&nbsp;";
	}
}

if ( ! function_exists('combo_triwulan'))
{
	function combo_triwulan($name_triwulan, $triwulan){
		$data = array(1=>'TRIWULAN I', 2=>'TRIWULAN II', 3=>'TRIWULAN III', 4=>'TRIWULAN IV');
		echo "<select name='$name_triwulan' id='$name_triwulan' class='text_input'>";
		echo "<option value=''></option>";
		foreach ($data as $key => $value){
			if ($key == $triwulan){
				echo "<option value='".$key."' selected>".$value."</option>";
			} else {
				echo "<option value='".$key."'>".$value."</option>";
			}
		}
		echo "</select>&nbsp;";	
	}
}

if ( ! function_exists('pages'))
{
	function pages($halaman, $jmlhalaman, $url, $id=""){
		if ($halaman > 1){
			$previous = $halaman-1;
			echo "
            <li><a href='".site_url().$url."/1".$id."'><i class='fa fa-angle-double-left'></i></a></li>
            <li><a href='".site_url().$url."/".$previous.$id."'><i class='fa fa-angle-left'></i></a></li>";
		} else {
			echo "
             <li class='disabled'><a><i class='fa fa-angle-double-left'></i></a></li>
             <li class='disabled'><a><i class='fa fa-angle-left'></i></a></li>";
		}
		if ($halaman < $jmlhalaman){
			$next = $halaman+1;
			echo "
            <li><a href='".site_url().$url."/".$next.$id."'><i class='fa fa-angle-right'></i></a></li>
             <li><a href='".site_url().$url."/".$jmlhalaman.$id."'><i class='fa fa-angle-double-right'></i></a></li>";
		} else {
			echo "<li class='disabled'><a><i class='fa fa-angle-right'></i></a></li>
             <li class='disabled'><a><i class='fa fa-angle-double-right'></i></a></li";
		}
	}
}

if ( ! function_exists('pages2'))
{
	function pages2($halaman2, $jmlhalaman, $url, $id=""){
		
		if ($halaman2 > 1){
			$previous = $halaman2-1;
			echo "<li><a href='".site_url().$url."/1".$id."'><<</a></li>
			<li><a href='".site_url().$url."/".$previous.$id."'>previous</a></li>";
		} else {
			echo "<li class='active'><a href='#'><<</a></li>
				  <li class='active'><a href='#'>previous</a></li>";
		}
		if ($halaman2 < $jmlhalaman){
			$next = $halaman2+1;
			echo "<li><a href='".site_url().$url."/".$next.$id."'>next</a></li>
			      <li><a href='".site_url().$url."/".$jmlhalaman.$id."'>>></a></li>";
		} else {
			echo "<li class='active'><a href='#'>next</a></li>
				  <li class='active'><a href='#'>>></a></li>";
		}
	}
}

if ( ! function_exists('seo'))
{
	function seo($s) {
		$c = array (' ');
		$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
	
		$s = str_replace($d, '', $s);
		
		$s = strtolower(str_replace($c, '-', $s));
		return $s;
	}
}

if ( ! function_exists('validasi'))
{
	function validasi($str, $tipe){
		switch($tipe){
			default:
			case'sql':
				$str = stripcslashes($str);	
				$str = htmlspecialchars($str);				
				$str = preg_replace('/[^A-Za-z0-9]/','',$str);				
				return intval($str);
			break;
			case'xss':
				$str = stripcslashes($str);	
				$str = htmlspecialchars($str);
				$str = preg_replace('/[\W]/','', $str);
				return $str;
			break;
		}
	}
}

if ( ! function_exists('extension'))
{
	function extension($path) {
		$file = pathinfo($path);
		if(file_exists($file['dirname'].'/'.$file['basename'])){
			return $file['basename'];
		}
	}
}

if ( ! function_exists('validasi_sql'))
{
	function validasi_sql($data){
		return $data;
	}
}

if ( ! function_exists('re_html'))
{
	function re_html($data){
		$filter = htmlspecialchars(strip_tags($data));
		return $filter;
	}
}


/* End of file application_helper.php */
/* Location: ./system/helpers/application_helper.php */