<?php
return array(
    'update_time' => '2014-07-05 19:21',
    'method' => '21cake.delivery_area.get',
    'name' => '获取配送站列表',
    'intro' => '根据销售区域ID，获取配送站及配送批次列表',
    'brief' => '选择某个销售区域，获取该区域下的配送批次数据，以及该区域下的配送站信息列表',
    'request_data' => array(// 请求值
        array(
            'name' => 'area_id',
            'type' => 'Number',
            'is_required' => '是', // 0: 否  1: 是
            'example_val' => '1',
            'default_val' => '0',
            'desc' => '销售区域id',
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
                    'name' => 'id',
                    'type' => 'int',
                    'is_required' => '是',
                    'example_val' => '1',
                    'desc' => '区域ID',
                ),
                array(
                    'name' => 'name',
                    'type' => 'string',
                    'is_required' => '是',
                    'example_val' => '上海',
                    'desc' => '区域名称',
                ),
                array(
                    'name' => 'batch',
                    'type' => 'Array',
                    'is_required' => '是',
                    'example_val' => '1',
                    'desc' => '批次列表json数据',
                    'sub_data' => array(
                        array(
                            'name' => 'batch_num',
                            'type' => 'Number',
                            'is_required' => '是',
                            'example_val' => '1',
                            'desc' => '批次ID',
                        ),
                        array(
                            'name' => 'ck_time',
                            'type' => 'Number',
                            'is_required' => '是',
                            'example_val' => '0530',
                            'desc' => '批次出库时间',
                        ),
                        array(
                            'name' => 'start_delivery_time',
                            'type' => 'String',
                            'is_required' => '是',
                            'example_val' => '0930',
                            'desc' => '批次发货开始时间',
                        ),
                        array(
                            'name' => 'end_delivery_time',
                            'type' => 'String',
                            'is_required' => '是',
                            'example_val' => '1130',
                            'desc' => '批次发货结束时间',
                        )
                    )
                ),
                array(
                    'name' => 'dreal',
                    'type' => 'Array',
                    'is_required' => '是',
                    'example_val' => '配送站json数据',
                    'desc' => '配送站点',
                    'sub_data' => array(
                        array(
                            'name' => 'id',
                            'type' => 'Number',
                            'is_required' => '是',
                            'example_val' => '23-01-1',
                            'desc' => '配送站主键ID',
                        ),
                        array(
                            'name' => 'name',
                            'type' => 'String',
                            'is_required' => '是',
                            'example_val' => '中关村站',
                            'desc' => '配送站名称',
                        ),
                        array(
                            'name' => 'number',
                            'type' => 'String',
                            'is_required' => '是',
                            'example_val' => 'ZG',
                            'desc' => '配送站编码',
                        ),
                        array(
                            'name' => 'salearea_id',
                            'type' => 'Number',
                            'is_required' => '是',
                            'example_val' => '2',
                            'desc' => '销售区域ID',
                        ),
                        array(
                            'name' => 'address',
                            'type' => 'String',
                            'is_required' => '是',
                            'example_val' => '北京市海淀区彩和坊西小街1号中',
                            'desc' => '配送站地址信息',
                        )
                    )
                )
            )
        )
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1',
        'data' => array(
            array(
                'id' => 1,
                'name' => '上海',
                'batch' => array(
                    '0' => array(
                        'id' => 20,
                        'batch_num' => 1,
                    ),
                    '1' => array(
                        'id' => 10,
                        'batch_num' => 2,
                    ),
                    '2' => array(
                        'id' => 11,
                        'batch_num' => 3,
                    ),
                    '3' => array(
                        'id' => 12,
                        'batch_num' => 4,
                    ),
                ),
                'dreal' => array(
                    '0' => array(
                        'id' => 1,
                        'number' => 21,
                        'name' => '21号站',
                    ),
                    '1' => array(
                        'id' => 2,
                        'number' => 22,
                        'name' => '22号站',
                    ),
                    '2' => array(
                        'id' => 3,
                        'number' => 23,
                        'name' => '23号站',
                    ),
                )
            ),
            '1' => array(
                'id' => 2,
                'name' => '北京',
                'batch' => array(
                    '0' => array(
                        'id' => 5,
                        'batch_num' => 1,
                    ),
                    '1' => array(
                        'id' => 6,
                        'batch_num' => 2,
                    ),
                    '2' => array(
                        'id' => 7,
                        'batch_num' => 3,
                    ),
                    '3' => array(
                        'id' => 8,
                        'batch_num' => 4,
                    ),
                ),
                'dreal' => array(
                    '0' => array(
                        'id' => 15,
                        'number' => 'ZG',
                        'name' => '中关村站',
                    ),
                    '1' => array(
                        'id' => 16,
                        'number' => 'HT',
                        'name' => '航天桥站',
                    ),
                    '2' => array(
                        'id' => 17,
                        'number' => 'DJ',
                        'name' => '大郊亭站',
                    ),
                )
            )
        ),
        'error_info' => '',
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
