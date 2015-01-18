<?php
/**
 * 
 *
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.shopnc.net)
 * @license    http://www.shopnc.net
 * @link       http://www.shopnc.net
 * @since      File available since Release v1.1
 */
defined('InShopNC') or exit('Access Invalid!');

class wxpay{
	
    public function __construct($payment_info,$order_info){
    	$this->wxpay($payment_info,$order_info);
    }
    public function wxpay($payment_info = array(),$order_info = array()){
    	if(!empty($payment_info) and !empty($order_info)){
    		$this->payment	= $payment_info;
    		$this->order	= $order_info;
    	}
    }
	/**
	 * 获取支付表单
	 *
	 * @param 
	 * @return array
	 */
	public function get_payurl(){
		//echo '111111';  
    //将商品名称 ，商品价格(变为分)以get方式传到下面这个页面里面。。
    //在下面页面里使用这两个变量
    //然后生成二维码
     //print_r($this->order);
     //exit ;

     $body = $this->order['goods_name']; 
     $out_trade_no = $this->order['pay_sn']; 
     $total_fee = ($this->order['pay_amount'])*100; 

		//请求的URL
    //$reqUrl = "http://www.ddjqr.com/shop/api/payment/wxpay/native_dynamic_qrcode.php?body=$body&out_trade_no=$out_trade_no&total_fee=$total_fee";

    $reqUrl = "http://www.ddjqr.com/shop/index.php?act=weixinpay&op=index&body=$body&out_trade_no=$out_trade_no&total_fee=$total_fee";
		return $reqUrl;
		
	}
	
}
