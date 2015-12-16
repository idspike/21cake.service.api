<?php
return array(
    'update_time' => '2014-07-02 15:21',
    'method' => 'b2c.manager.package.search',
    'name' => '包裹查询',
    'intro' => '说明：暂无',
    'brief' => '用于进行包裹查询',
    'request_data' => array(  // 请求值
        array(
            'name' => 'salearea_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '1',
            'default_val' => '无',
            'desc' => '地区id',
        ),
        array(
            'name' => 'distribution_real_id',
            'type' => 'int',
            'is_required' => '必须',
            'example_val' => '21',
            'default_val' => '无',
            'desc' => '配送站点号',
        ),
        array(
            'name' => 'package_number',
            'type' => 'int',
            'is_required' => '必须', // 0: 否  1: 是
            'example_val' => '0220140514168194',
            'default_val' => '无',
            'desc' => '包裹号',
        ),
    ),
    'return_data' => array( // 返回值
        array(
            'name' => 'status',
            'type' => 'int',
            'example_val' => '1: 成功 0: 失败',
            'desc' => '返回状态',
        ),
        array(
            'name' => 'error_info',
            'type' => 'array',
            'example_val' => 'code: 错误码  <br />message: 错误信息',
            'desc' => '如果有错误信息',
        ),
        array(
            'name' => 'data',
            'type' => 'array',
            'example_val' => '数据数组',
            'desc' => '查询出来的订单数据',
        ),
    ),
    'retrun_xml' => "无",
    'retrun_json' => array(
        'status' => '1', // 1: 为数据返回正确  0: 有错误信息
        'data' => array(
            "0220140514168194"=>array(
                "order_sn"=>'BC2014051356020',
                "ship_name"=>"张三",
                "ship_mobile"=>"13488888888",
                "delivery_time"=>'1400031000'
                ),
            "0220140514168195"=>array(
                "order_sn"=>'BC2014051356021',
                "ship_name"=>"李四",
                "ship_mobile"=>"13488888889",
                "delivery_time"=>'1400031000'
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
    ),
    'faq' => "无"
);
