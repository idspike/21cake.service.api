<?php
return array(
    'update_time' => '2014-07-10 15:21',
    'method' => array_search('b2c.saleman.delivery_list.get_list',$method_maps),
    'name' => '获取支付方式',
    'intro' => '说明：获取支付方式',
    'brief' => '站长查询-支付类型方式',
    'request_data' => array(  // 请求值
        array(
            'name' => '无',
            'type' => '无',
            'is_required' => 0,
            'example_val' => '无',
            'default_val' => '无',
            'desc' => '无'
        ),
        // status
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
                    'example_val' => -2,
                    'desc' => '错误代码'
                ),
                array(
                    'name' => 'message',
                    'type' => 'string',
                    'example_val' => '未查询到该员工!',
                    'desc' => '错误信息'
                )
            )
        ),
        array(
            'name' => 'data',
            'type' => 'Array',
            'example_val' => '返回json数据',
            'desc' => '无',
            'sub_data' => array(
                array(
                    'name' => '0',
                    'type' => 'string',
                    'example_val' => '无',
                    'desc' => '无',
                ),
                array(
                    'name' => '1',
                    'type' => 'string',
                    'example_val' => '现金',
                    'desc' => '现金',
                ),
                array(
                    'name' => '2',
                    'type' => 'string',
                    'example_val' => 'POS刷卡',
                    'desc' => 'POS刷卡',
                ),
                array(
                    'name' => '3',
                    'type' => 'string',
                    'example_val' => '代金卡',
                    'desc' => '代金卡',
                ),
            ),
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            '0' => '无',
            '1' => '现金',
            '2' => 'POS刷卡',
            '3' => '代金卡',
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
