<?php
return array(
		'update_time' => '2014-07-02 15:21',
		'method' => array_search('b2c.coupons.coupons.get_coupon',$method_maps),
		'name' => '发送优惠券',
		'intro' => '说明：可发送2.0优惠方案生成的优惠券，支持多张发送多张优惠券。',
		'brief' => '操作路径：调用接口直接发送',
		'request_data' => array(  // 请求值
				array(
						'name' => 'uid',
						'type' => 'Number',
						'is_required' => '必须',
						'example_val' => '34563579',
						'default_val' => '无',
						'desc' => '用户ID',
				),
				array(
						'name' => 'cid',
						'type' => 'Number',
						'is_required' => '必须',
						'example_val' => '30',
						'default_val' => '无',
						'desc' => '优惠方案ID'
				),
				array(
						'name' => 'snum',
						'type' => 'Number',
						'is_required' => '1', // 0: 否  1: 是
						'example_val' => '0',
						'default_val' => '无',
						'desc' => '是否发送多张，0或空为只发送一张，1为发送多张',
				),
		),
		'return_data' => array( // 返回值
				array(
						'name' => 'status',
						'type' => 'Number',
						'example_val' => '1: 成功 0: 失败',
						'desc' => '返回状态',
				),
				array(
						'name' => 'error_info',
						'type' => 'Array',
						'example_val' => 'code: 错误码  <br />message: 错误信息',
						'desc' => '错误信息数据',
						'sub_data' => array(
								array(
										'name' => 'code',
										'type' => 'Number',
										'example_val' => -3,
										'desc' => '错误代码'
								),
								array(
										'name' => 'message',
										'type' => 'string',
										'example_val' => '一个用户只能领取一次哦！',
										'desc' => '错误信息'
								)
						)
				),
				array(
						'name' => 'data',
						'type' => 'string',
						'example_val' => 'success',
						'desc' => '操作成功',
				),
		),
		'retrun_xml' => "无",
		'retrun_json' => array(
				'status' => '1', // 1: 为数据返回正确  0: 有错误信息
				'data' => array(
						'status' => '1',
						'data' => 'success',
						'error_info' => ''
				),
				'error_info' => '',
		),
		'error_info' => array(
				array(
						'code' => '错误码',
						'message' => '错误描述',
						'solution' => '解决方案',
				),
		),
		'faq' => "无"
);
