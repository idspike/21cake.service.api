<?php

return array(
    'update_time' => '2014-07-05 19:21',
    'method' => array_search('b2c.agent.delivery_pro.save_out',$method_maps),
    'name' => '配送单扫描分派提交',
    'intro' => '单个或者多个配送单批量分派给配送员',
    'brief' => '作业路径：站长->扫描分派->确认提交<BR>订单到站后，站长通过扫描配送单的条形码，进行配送单分派给配送员',
    'request_data' => array(// 请求值
        array(
            'name' => 'rule_number',
            'type' => 'String',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '12014001,12014002,12014003',
            'default_val' => '无',
            'desc' => '配送单号',
        ),
        array(
            'name' => 'delivery_saleman',
            'type' => 'String',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '120005',
            'default_val' => '无',
            'desc' => '配送员工号',
        ),
        array(
            'name' => 'session_id',
            'type' => 'string',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => 'dfsafe',
            'default_val' => '无',
            'desc' => 'session id',
        ),
    ),
    'return_data' => array(// 返回值
        array(
            'name' => 'status',
            'type' => 'Number',
            'is_required' => '是',
            'example_val' => '1',
            'desc' => '返回1表示成功，返回0表示失败',
        ),
        array(
            'name' => 'data',
            'type' => 'Array',
            'is_required' => '是',
            'example_val' => '返回json数据',
            'desc' => '无',
            'sub_data' => array(
                array(
                    'name' => 'fail_list',
                    'type' => 'string',
                    'is_required' => '可选',
                    'example_val' => '1,2,3',
                    'desc' => '失败列表',
                ),
                array(
                    'name' => 'fail_sub',
                    'type' => 'array',
                    'is_required' => '',
                    'example_val' => '',
                    'desc' => '取消或者已经分派过的订单的配送id数组',
                ),
            )
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '0', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            'fail_list' => '配送单12014001无效,配送单12014002状态错误,12014003',
            'fail_sub' => array(
        	    'cancel' => array(
            	    '0' => '1201407181151927499',
        	        '1' => '1201407181151927499',
                ),
                'suc_order' => array(
            	    '0' => '1201407181151927499',
        	        '1' => '1201407181151927499',
                ),
            )
        )
    ),
    'error_info' => array(
        array(
            'code' => '错误码',
            'message' => '错误描述',
            'solution' => '解决方案',
        ),
        array(
            'code' => '错误码',
            'message' => '错误描述',
            'solution' => '解决方案',
        ),
    ),
    'faq' => "无"
);
