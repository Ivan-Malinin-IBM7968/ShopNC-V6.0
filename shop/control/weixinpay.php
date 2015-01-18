<?php
/**
 * 购买流程
 *
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.shopnc.net)
 * @license    http://www.shopnc.net
 * @link       http://www.shopnc.net
 * @since      File available since Release v1.1
 */
defined('InShopNC') or exit('Access Invalid!');
class weixinpayControl extends BaseBuyControl {

    public function __construct() {
        parent::__construct();
        Language::read('home_cart_index');
        if (!$_SESSION['member_id']){
            redirect('index.php?act=login&ref_url='.urlencode(request_uri()));
        }
        //验证该会员是否禁止购买
        if(!$_SESSION['is_buy']){
            showMessage(Language::get('cart_buy_noallow'),'','html','error');
        }
    }

    
    public function indexOp() {

        require_once(BASE_PATH."/api/payment/wxpay/WxPayPubHelper/WxPayPubHelper.php");
        //使用统一支付接口
        $unifiedOrder = new UnifiedOrder_pub();
        
        //设置统一支付接口参数
        //设置必填参数
        //appid已填,商户无需重复填写
        //mch_id已填,商户无需重复填写
        //noncestr已填,商户无需重复填写
        //spbill_create_ip已填,商户无需重复填写
        //sign已填,商户无需重复填写

          //获取商品描述，订单号，总金额
        $body =  $_GET['body'];
        $out_trade_no =  $_GET['out_trade_no'];
        $total_fee =  $_GET['total_fee'];

        $unifiedOrder->setParameter("body","$body");//商品描述
        $unifiedOrder->setParameter("out_trade_no","$out_trade_no");//商户订单号 
        $unifiedOrder->setParameter("total_fee","$total_fee");//总金额


        $unifiedOrder->setParameter("notify_url",WxPayConf_pub::NOTIFY_URL);//通知地址 
        $unifiedOrder->setParameter("trade_type","NATIVE");//交易类型
        //非必填参数，商户可根据实际情况选填
        //$unifiedOrder->setParameter("sub_mch_id","XXXX");//子商户号  
        //$unifiedOrder->setParameter("device_info","XXXX");//设备号 
        //$unifiedOrder->setParameter("attach","XXXX");//附加数据 
        //$unifiedOrder->setParameter("time_start","XXXX");//交易起始时间
        //$unifiedOrder->setParameter("time_expire","XXXX");//交易结束时间 
        //$unifiedOrder->setParameter("goods_tag","XXXX");//商品标记 
        //$unifiedOrder->setParameter("openid","XXXX");//用户标识
        //$unifiedOrder->setParameter("product_id","XXXX");//商品ID
        
        //获取统一支付接口结果
        $unifiedOrderResult = $unifiedOrder->getResult();
        
        //商户根据实际情况设置相应的处理流程
        if ($unifiedOrderResult["return_code"] == "FAIL") 
        {
          //商户自行增加处理流程
          echo "通信出错：".$unifiedOrderResult['return_msg']."<br>";
        }
        elseif($unifiedOrderResult["result_code"] == "FAIL")
        {
          //商户自行增加处理流程
          echo "错误代码：".$unifiedOrderResult['err_code']."<br>";
          echo "错误代码描述：".$unifiedOrderResult['err_code_des']."<br>";
        }
        elseif($unifiedOrderResult["code_url"] != NULL)
        {
          //从统一支付接口获取到code_url
          $code_url = $unifiedOrderResult["code_url"];
          //商户自行增加处理流程
          //......
        }

        Tpl::output('unifiedOrderResult',$unifiedOrderResult);
        Tpl::output('code_url',$code_url);
        Tpl::showpage('buy_weixinpay');
    }

   

}
