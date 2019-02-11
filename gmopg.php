<?php

require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'gmopg_endpoints.php';

class GMOPG{

	private $isTest;

	private $SiteID;
	private $SitePass;

	public function GMOPG($SiteID, $SitePass, $isTest = false){
		$this->SiteID = $SiteID;
		$this->SitePass = $SitePass;

		$this->isTest = $isTest;
	}

	public function getSiteID(){
		return $this->SiteID;
	}
	public function getSitePass(){
		return $this->SitePass;
	}

	public function searchMember($param){

		$endpoint = GMOPG_Endpoints::SEARCH_MEMBER;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function saveMember($param){

		$endpoint = GMOPG_Endpoints::SAVE_MEMBER;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
			'MemberName' 	=> $param['member_name'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function updateMember($param){

		$endpoint = GMOPG_Endpoints::UPDATE_MEMBER;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
			'MemberName' 	=> $param['member_name'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function deleteMember($param){

		$endpoint = GMOPG_Endpoints::DELETE_MEMBER;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function searchCard($param){

		$endpoint = GMOPG_Endpoints::SEARCH_CARD;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
			'SeqMode' 		=> '1', // 物理モード
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);
		foreach ($result['params'] as $key => $value) {
			if($value['DeleteFlag'] === '1'){
				unset($result['params'][$key]);
			}
		}

		return $result;
	}

	public function saveCard($param){

		$endpoint = GMOPG_Endpoints::SAVE_CARD;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
			'SeqMode' 		=> '1', // 物理モード
			'DefaultFlag'	=> '0',	// 継続課金対象としない
			'CardNo'		=> $param['card_no'],
			'CardPass'		=> $param['card_pass'],
			'Expire'		=> $param['card_expire'], // MM/YY
			'HolderName'	=> $param['holder_name'],
			'Token'			=> $param['token'],
			'UpdateType'	=> '1', // 全て更新
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function deleteCard($param){

		$endpoint = GMOPG_Endpoints::DELETE_CARD;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $param['member_id'],
			'SeqMode' 		=> '1', // 物理モード
			'CardSeq'		=> $param['card_seq'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function entryTran($param){

		$endpoint = GMOPG_Endpoints::ENTRY_TRAN;
		$param = array(
			'ShopID'        => $param['shop_id'],
			'ShopPass'      => $param['shop_pw'],
			'OrderID' 		=> $param['order_id'],
			'JobCd' 		=> 'AUTH', // CHECK:有効性チェック, CAPTURE:即時売上, AUTH:仮売上, SAUTH: 簡易オーソリ
			'Amount'		=> $param['amount'],
			'Tax'			=> $param['tax'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function execTran($params){

		$endpoint = GMOPG_Endpoints::EXEC_TRAN;
		$param = array(
			'AccessID'      => $params['access_id'],
			'AccessPass'    => $params['access_pw'],
			'OrderID' 		=> $params['order_id'],
			'Method' 		=> '1', // 1:一括, 2:分割, 3:ボーナス一括, 4:ポーナス分割, 5:リボ
			//'PayTimes'	=> 12,
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'MemberID' 		=> $params['member_id'],
			'SeqMode' 		=> '1', // 物理モード
			'CardSeq'		=> $params['card_seq'],
			//'CardPass'		=> $param['card_pass'],
			'SecurityCode'	=> $params['security_code'],
		);

		// 新規カード登録の場合
		if(false === isset($params['card_seq']) || '' === $params['card_seq']){
			unset($param['CardSeq']);
			if(isset($params['card_number'])) $param['CardNo'] = $params['card_number'];
			if(isset($params['card_expire'])) $param['Expire'] = $params['card_expire'];
			if(isset($params['token'])) $param['Token'] = $params['token'];			
		}

		//echo("<pre>");var_dump($param);echo("</pre>");
		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	// 決済取消し処理
	public function voidTran($params){

		$endpoint = GMOPG_Endpoints::ALTER_TRAN;
		$param = array(
			'ShopID'        => $params['shop_id'],
			'ShopPass'      => $params['shop_pw'],
			'AccessID'      => $params['access_id'],
			'AccessPass'    => $params['access_pw'],
			'JobCd' 		=> 'VOID', // VOID:取消, RETURN:返品, RETURNX:月跨り返品
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}


	public function entryTranRakuten($param){

		$endpoint = GMOPG_Endpoints::ENTRY_TRAN_RAKUTEN;
		$param = array(
			'ShopID'        => $param['shop_id'],
			'ShopPass'      => $param['shop_pw'],
			'OrderID' 		=> $param['order_id'],
			'JobCd' 		=> 'AUTH', // CHECK:有効性チェック, CAPTURE:即時売上, AUTH:仮売上, SAUTH: 簡易オーソリ
			'Amount'		=> $param['amount'],
			'Tax'			=> $param['tax'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	public function execTranRakuten($params){

		$endpoint = GMOPG_Endpoints::EXEC_TRAN_RAKUTEN;
		$param = array(
			'ShopID'        => $params['shop_id'],
			'ShopPass'      => $params['shop_pw'],
			'AccessID'      => $params['access_id'],
			'AccessPass'    => $params['access_pw'],
			'OrderID' 		=> $params['order_id'],
			'ItemId' 		=> $params['item_id'],
			'ItemSubId' 	=> $params['item_sub_id'],
			'ItemName' 		=> $params['item_name'],
			'RetURL' 		=> $params['return_url'],
			'ErrorRcvURL' 	=> $params['error_url'],
		);

		// 新規カード登録の場合
		if(false === isset($params['card_seq']) || '' === $params['card_seq']){
			unset($param['CardSeq']);
			if(isset($params['card_number'])) $param['CardNo'] = $params['card_number'];
			if(isset($params['card_expire'])) $param['Expire'] = $params['card_expire'];
			if(isset($params['token'])) $param['Token'] = $params['token'];			
		}

		//echo("<pre>");var_dump($param);echo("</pre>");
		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}

	/**
	 * 決済後カード登録
	 * @param  [type] $param [description]
	 * @return [type]        [description]
	 */
	public function tradedCard($param){

		$endpoint = GMOPG_Endpoints::TRADED_CARD;
		$param = array(
			'SiteID'        => $this->SiteID,
			'SitePass'      => $this->SitePass,
			'ShopID'        => $param['shop_id'],
			'ShopPass'      => $param['shop_pw'],
			'OrderID' 		=> $param['order_id'],
			'MemberID' 		=> $param['member_id'],
		);

		$result = GMOPG_Endpoints::post($endpoint, $param, $this->isTest);

		return $result;
	}
}