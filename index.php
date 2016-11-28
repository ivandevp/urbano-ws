<?php

/*
 * Urbano Ws test
 */

$user = 'ws.tr1t4l0n';
$pwd = 'tr1t4l0n123';

$params = array(
	'vp_cod_rastreo' => '111111111111',
	'vp_cod_barra' => '2222222222222',
	'vp_fecha_emi_vent' => '04/08/2014',
	'vp_nro_o_compra' => '333333333333',
	'vp_cod_cliente' => '444444444444',
	'vp_nom_cliente' => 'Nombre Cliente Test',
	'vp_nom_empresa' => 'Empresa Test',
	'vp_nro_telf' => '1234567' ,
	'vp_nro_telf_mobil' => '987654321',
	'vp_correo_elec' => 'test@gmail.com',
	'vp_dir_entrega' => 'Direccion Test',
	'vp_nro_via' => 1111,
	'vp_nro_int' => '2121',
	'vp_nom_urb' => 'NomUrb',
	'vp_ubi_direc' => '150117',
	'vp_ref_direc' => 'Ref Dir',
	'vp_id_direc' => 0,
	'vp_fech_pro' => '04/08/2014',
	'vp_arco_hor' => 'PM',
	'vp_fech_venc' => '09/08/2014',
	'vp_nom_autorizado' => 'Nom Autorizado',
	'vp_nro_doc_autorizado' => '66666666',
	'vp_nom_autorizado_2' => 'Nom Autorizado 2',
	'vp_nro_doc_autorizado_2' => '77777777',
	'vp_med_pago' => 'MedPago',
	'vp_descripcion' => 'Desripcion',
	'vp_anotacion' => 'Anotacion',
	'vp_moneda' => 'SOL',
	'vp_importe' => '2.5',
	'vp_serv_recol' => 'NO',
	'vp_cod_cen_act' => '',
	'vp_nom_cen_act' => '',
	'vp_dir_cen_act' => '',
	'vp_ubi_cen_act' => '',
	'vp_rec_arco_hor' => 'PM',
	'vp_peso_total' => '0.5',
	'vp_pieza_total' => 1,
	'vp_urgente' => 'NO',
	'vp_picking' => 'NO',
	'vp_mecanizado' => 'SI',
	'vp_venta_seller' => 'NO',
	'vp_sell_codigo' => '',
	'vp_sell_codigo' => '',
	'vp_sell_nombre' => '',
	'vp_sell_direcc' => '',
	'vp_sell_ubigeo' => '',
);

$params['productos'] = array(
	array(
		'vp_cod_sku' => '01',
		'vp_descr_sku' => 'NOMBRE PRODUCTO',
		'vp_modelo_sku' => 'MODELO',
		'vp_marca_sku' => 'MARCA PRODUCTO',
		'vp_peso_sku' => '1.5',
		'vp_peso_v_sku' => '1.2',
		'vp_valor_sku' => '2.5',
		'vp_cantidad_sku' => '2',
	)
);

$data = array('json' => json_encode($params));
$postdata = http_build_query($data);

$url = "http://200.107.156.230:8000/api/guia_electronica/general/";

$headers = array(
	'http' => array(
		'method' => 'POST',
		'header' => 'Content-type: application/x-www-form-urlencoded' . '\r\n' .
			'user:' . $user . '\r\n' .
			'pass:' . $pwd . '\r\n',
		'content' => $postdata
	)
);

$context = stream_context_create($headers);

$response = file_get_contents($url, false, $context);

var_dump($response);
