<?php

return array(
    'update_time' => '14-7-16 下午4:40',
    'method' => array_search('b2c.agent.package.tj_packs_sta',$method_maps),
    'name' => '查询站点包裹数',
    'intro' => '根据区域id，批次号，以及站点，获取包裹数和已扫包裹数',
    'brief' => '操作路径：站长--进站扫描--包裹数显示<BR>每个站点根据每个批次，实时查询包裹总数（包含已扫包裹数）',
    'request_data' => array(// 请求值
        array(
            'name' => 'sale_id',
            'type' => 'int',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '2',
            'default_val' => '无',
            'desc' => '区域',
        ),
        array(
            'name' => 'batch_num',
            'type' => 'int',
            'is_required' => '1', // 0: 否  1: 是
            'example_val' => '2',
            'default_val' => '无',
            'desc' => '批次',
        ),
        array(
            'name' => 'real_id',
            'type' => 'int',
            'is_required' => '1',
            'example_val' => '3',
            'default_val' => '无',
            'desc' => '站号',
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
                    'name' => 'count',
                    'type' => 'int',
                    'example_val' => '2',
                    'desc' => '包裹总数：已打包或者已出库的包裹单',
                ),
                array(
                    'name' => 'remain',
                    'type' => 'int',
                    'example_val' => '2',
                    'desc' => '剩余数：已打包未出库的数量',
                ),
                array(
                    'name' => 'packs',
                    'type' => 'Array',
                    'example_val' => '无',
                    'desc' => '描述',
                    'sub_data' => array(
                        array(
                            'name' => 'package_number',
                            'type' => 'string',
                            'example_val' => '2220140514510995',
                            'desc' => '包裹号',
                        ),
                        array(
                            'name' => 'salearea_number',
                            'type' => 'string',
                            'example_val' => 'S',
                            'desc' => '销售区域标示',
                        ),
                        array(
                            'name' => 'package_time',
                            'type' => 'Number',
                            'example_val' => '1405567950',
                            'desc' => '打包时间(时间戳)',
                        ),
                        array(
                            'name' => 'ck_time',
                            'type' => 'Number',
                            'example_val' => '1405567950',
                            'desc' => '出库时间(时间戳)',
                        ),
                        array(
                            'name' => 'jz_time',
                            'type' => 'Number',
                            'example_val' => '1405567950',
                            'desc' => '进站时间(时间戳)',
                        ),
                        array(
                            'name' => 'deli_number',
                            'type' => 'Number',
                            'example_val' => '1',
                            'desc' => '配送单数量',
                        ),
                        array(
                            'name' => 'ps_number',
                            'type' => 'Number',
                            'example_val' => '2',
                            'desc' => '配送站',
                        ),
                        array(
                            'name' => 'batch_num',
                            'type' => 'Number',
                            'example_val' => '3',
                            'desc' => '配送批次',
                        ),
                        array(
                            'name' => 'sc_number',
                            'type' => 'Number',
                            'example_val' => '2',
                            'desc' => '生产单数量',
                        ),
                        array(
                            'name' => 'lq_number',
                            'type' => 'Number',
                            'example_val' => '',
                            'desc' => '路区号',
                        ),
                    )
                ),
            )
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' =>array(
            'count' => '1',
            'remain' => '1',
            'packs' => array(
                '0' => array(
                        'package_number' => '2220140514510995',
                        'salearea_number' => 'S',
                        'package_time' => '1405567950',
                        'ck_time' => '1405567992',
                        'jz_time' => '',
                        'deli_number' => '1',
                        'ps_number' => '2',
                        'batch_num' => '3',
                        'sc_number' => '2',
                        'lq_number' => '',
                    )
                )
            ),
        'error_info' => array(),
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
