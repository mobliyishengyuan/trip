<?php
$result = array(
	"err_no" => 0,
	"err_msg" => "success",
	"data" => array(),
);

$beijing_zh_cn_plan = array(
	// one day trip plan
	array(
		// first day
		array(
			array(
				"name" => "天安门",
				// 维度
				"lat" => 39.90872,
				// 经度 
				"lgt" => 116.39748,
				"cost_time" => "2",
				"desc" => "天安门",
				"address" => "北京市东城区",
			),
			array(
				"name" => "故宫",
				// 维度
				"lat" => 39.916345,
				// 经度 
				"lgt" => 116.397155,
				"cost_time" => "2 - 3",
				"desc" => "故宫",
				"address" => "北京市东城区景山前街4号",
			),
		),
		
	),
	// two day trip plan
	array(
		// first
		array(
			array(
				"name" => "天安门",
				// 维度
				"lat" => 39.90872,
				// 经度 
				"lgt" => 116.39748,
				"cost_time" => "2",
				"desc" => "天安门",
				"address" => "北京市东城区",
			),
			array(
				"name" => "故宫",
				// 维度
				"lat" => 39.916345,
				// 经度 
				"lgt" => 116.397155,
				"cost_time" => "2 - 3",
				"desc" => "故宫",
				"address" => "北京市东城区景山前街4号",
			),
		),
		// second
		array(
			array(
				"name" => "八达岭长城",
				// 维度
				"lat" => 40.35976,
				// 经度 
				"lgt" => 116.02002,
				"cost_time" => "2 - 3",
				"desc" => "八达岭长城",
				"address" => "北京市延庆县",
			),
			array(
				"name" => "明十三陵",
				// 维度
				"lat" => 40.255149,
				// 经度 
				"lgt" => 116.223556,
				"cost_time" => "2 - 3",
				"desc" => "明十三陵",
				"address" => "北京市昌平区昌赤路",
			),
		),
	),
);

$rome_en_trip_plan = array(
	// one day trip plan
	array(
		// first day
		// Colosseum[2 hours]Roman Forum and Palatine Hill[2 hours]Campo de' Fiori[2 hours]
		array(
			array(
				"name" => "Colosseum",
				// 维度
				"lat" => 41.89021,
				// 经度 
				"lgt" => 12.492231,
				"cost_time" => "2",
				"desc" => "Colosseum",
				"address" => "Piazza del Colosseo, 100184 Roma",
			),
			array(
				"name" => "Roman Forum and Palatine Hill",
				// 维度
				"lat" => 41.890491,
				// 经度 
				"lgt" => 12.489032,
				"cost_time" => "2",
				"desc" => "Roman Forum and Palatine Hill",
				"address" => "Piazza di S. Maria Nova, 5300186 Roma RM",
			),
			array(
				"name" => "Campo de' Fiori",
				// 维度
				"lat" => 41.895561,
				// 经度 
				"lgt" => 12.472234,
				"cost_time" => "2",
				"desc" => "Campo de' Fiori",
				"address" => "Piazza Campo de' Fiori00186 Rome",
			),
		),
		
	),
	// two day trip plan
	array(
		// first day
		// Colosseum[2 hours]Roman Forum and Palatine Hill[2 hours]Campo de' Fiori[2 hours]
		array(
			array(
				"name" => "Colosseum",
				// 维度
				"lat" => 41.89021,
				// 经度 
				"lgt" => 12.492231,
				"cost_time" => "2",
				"desc" => "Colosseum",
				"address" => "Piazza del Colosseo, 100184 Roma",
			),
			array(
				"name" => "Roman Forum and Palatine Hill",
				// 维度
				"lat" => 41.890491,
				// 经度 
				"lgt" => 12.489032,
				"cost_time" => "2",
				"desc" => "Roman Forum and Palatine Hill",
				"address" => "Piazza di S. Maria Nova, 5300186 Roma RM",
			),
			array(
				"name" => "Campo de' Fiori",
				// 维度
				"lat" => 41.895561,
				// 经度 
				"lgt" => 12.472234,
				"cost_time" => "2",
				"desc" => "Campo de' Fiori",
				"address" => "Piazza Campo de' Fiori00186 Rome",
			),
		),
		// second
		// St.Peter's Square (Piazza San Pietro)[1 hour]Vatican City[1 hour]Vatican Museums[3 hours]
		array(
			array(
				"name" => "St.Peter's Square (Piazza San Pietro)",
				// 维度
				"lat" => 41.902241,
				// 经度 
				"lgt" => 12.457266,
				"cost_time" => "1",
				"desc" => "St.Peter's Square (Piazza San Pietro)",
				"address" => "Piazza San Pietro Vatican RM",
			),
			array(
				"name" => "Vatican City",
				// 维度
				"lat" => 41.9038795,
				// 经度 
				"lgt" => 12.4520834,
				"cost_time" => "1",
				"desc" => "Vatican City",
				"address" => "Vatican City",
			),
			array(
				"name" => "Vatican Museums",
				// 维度
				"lat" => 41.906651,
				// 经度 
				"lgt" => 12.453507,
				"cost_time" => "3",
				"desc" => "Vatican Museums",
				"address" => "Viale Vaticano 00165 Roma",
			),
		),
	),
);

$result['data'] = $beijing_zh_cn_plan;

echo json_encode($result);
