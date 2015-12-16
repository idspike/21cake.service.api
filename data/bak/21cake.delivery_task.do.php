<?php

return array(
    'update_time' => '2014-07-05 19:21',
    'method' => '21cake.delivery_task.do',
    'name' => '配送单任务分派',
    'intro' => '单个或者多个配送单批量分派给配送员',
    'brief' => '订单到站后，站长通过扫描配送单的条形码，进行配送单分派给配送员',
    'request_data' => array(// 请求值
                                array(
                                    'name' => 'rule_number',
                                    'type' => 'String',
                                    'is_required' => '是', // 0: 否  1: 是
                                    'example_val' => '12014001,12014002,12014003',
                                    'default_val' => '无',
                                    'desc' => '配送单号',
                                ),
                                array(
                                    'name' => 'delivery_saleman',
                                    'type' => 'String',
                                    'is_required' => '是', // 0: 否  1: 是
                                    'example_val' => '120005',
                                    'default_val' => '无',
                                    'desc' => '配送员工号',
                                )
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
                                    )
                                )
      ),
    'retrun_xml' => "无",
    'retrun_json' => array(
                            'status' => '0', // 1: 为数据返回正确  0: 有错误信息
                            'data' => array(
                                        'fail_list' => '12014001,12014002,12014003',
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
