<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: isikan dengan API KEY Anda"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$data['prov'] = json_decode($response, true);

		$this->load->view('v_main', $data);
	}

	public function get_city($province_id){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=" . $province_id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: isikan dengan API KEY Anda"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$city =  json_decode($response, true);

		if($city['rajaongkir']['status']['code'] == 200){
			foreach($city['rajaongkir']['results'] as $city){
				echo "<option value='$city[city_id]'>$city[city_name]</option>";
			}
		}
	}

	public function get_province_to(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: isikan dengan API KEY Anda"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		$prov_to =  json_decode($response, true);

		if($prov_to['rajaongkir']['status']['code'] == 200){
			foreach($prov_to['rajaongkir']['results'] as $prov_to){
				echo "<option value='$prov_to[province_id]'>$prov_to[province]</option>";
			}
		}
	}

	public function get_cost($city, $city_to, $berat, $kurir){
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=".$city."&destination=".$city_to."&weight=".$berat."&courier=" . $kurir,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: isikan dengan API KEY Anda"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$ongkir =  json_decode($response, true);
		}

		if($ongkir['rajaongkir']['status']['code'] == 200){
			foreach($ongkir['rajaongkir']['results'][0]['costs'] as $ong){
				echo '<div class="card">
				<div class="card-body">
				<div class="card-title">'.$ong['service'].'</div>
				<div class="card-subtitle">'.$ong['description'].'</div>
				<hr class="cell-divide-hr">
				<div class="price">
				<span class="currency">Rp.</span><span class="value">'.number_format($ong['cost'][0]['value'],0,',','.').'</span>
				</div>
				<hr class="cell-divide-hr">
				<ul class="list-unstyled li-space-lg">
				<li class="media">
				<i class="fas fa-check"></i><div class="media-body">Estimasi Pengiriman: <strong>'.$ong['cost'][0]['etd'].'</strong> Hari</div>
				</li>
				</ul>
				<div class="button-wrapper">
				<button class="btn-solid-reg page-scroll" style="text-transform: uppercase">'.$ongkir['rajaongkir']['results'][0]['code'].'</button>
				</div>
				</div>
				</div>';
			}
		}

	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */
