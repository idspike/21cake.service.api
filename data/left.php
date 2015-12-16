<?php
$method_maps = require_once 'map.php';
return array(
    array(
        'method' => array_search('cakeapi.passport.login', $method_maps),
        'name' => '用户登录',
        'finish' => true,
    ),
    
    array(
        'method' => array_search('cakeapi.order.detail',$method_maps),
        'name' => '订单详情',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.saleman.complete_delivery.sign_delivery',$method_maps),
        'name' => '修改配送状态为用户签收',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.package.get_batch_by_aid',$method_maps),
        'name' => '获取配送站点批次列表[站长-进站扫描]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.package.tj_packs_sta',$method_maps),
        'name' => '查询站点包裹数[站长-进站扫描] ',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.package.scan',$method_maps),
        'name' => '进站扫描包裹单[站长-进站扫描]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.delivery_pro.save_out',$method_maps),
        'name' => '配送单扫描分派提交[站长-扫描分派]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.delivery_deliverys.search',$method_maps),
        'name' => '配送单手工分派查询[站长-手工扫描]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.delivery_deliverys.do_select_member',$method_maps),
        'name' => '手工分派[站长-手工分派]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.saleman.delivery_list.get_summary',$method_maps),
        'name' => '配送统计[配送员->配送查询->配送统计]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.saleman.delivery_list.get_list',$method_maps),
        'name' => '配送查询[配送员->配送统计]',
        'finish' => true
    ),
    // array( 可以使用 get_list
    //     'method' => array_search('21cake.delivery_detail.get',$method_maps),
    //     'name' => '获取单个配送单详细信息',
    //     'finish' => true
    // ),
    array(
        'method' => array_search('cakeapi.agent.delivery_deliverys.get_saleman_deliverys_info',$method_maps),
        'name' => '配送入帐查询[站长-配送入账]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.agent.delivery_deliverys.lr_save',$method_maps),
        'name' => '批量配送入账[站长-配送入账]',
        'finish' => true
    ),
    array(
        'method' => array_search('cakeapi.order.paytype.get',$method_maps),
        'name' => '获取支付类型',
        'finish' => true
    ),
	array(
		'method' => array_search('cakeapi.coupons.get_coupon',$method_maps),
		'name' => '发送优惠券',
		'finish' => true
	),
    
    
/*

    // guhaiguo
    array(
        'method' => '21cake.package_detail.get',
        'name' => '获取单个包裹单明细信息',
        'finish' => false
    ),
    array(
        'method' => '21cake.package_list.get',
        'name' => '获取多个包裹单明细信息',
        'finish' => false
    ),
    array(
        'method' => '21cake.delivery_area.get',
        'name' => '获取配送站点列表',
        'finish' => false
    ),
    array(
        'method' => '21cake.delivery_task.do',
        'name' => '配送单任务分派',
        'finish' => false
    ),
    array(
        'method' => '21cake.delivery_list.get',
        'name' => '获取多个配送单信息',
        'finish' => false
    ),
    */
);
