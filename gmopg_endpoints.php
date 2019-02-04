<?php

require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'gmopg_error_handler.php';

/**
 * GMOPGのエンドポイントを返すクラス
 */
class GMOPG_Endpoints{

	// Member 関係
    const SEARCH_MEMBER     = '/SearchMember.idPass';
    const SAVE_MEMBER       = '/SaveMember.idPass';
    const UPDATE_MEMBER     = '/UpdateMember.idPass';
    const DELETE_MEMBER     = '/DeleteMember.idPass';

    // Card 関係
    const SEARCH_CARD		= '/SearchCard.idPass';
    const SAVE_CARD			= '/SaveCard.idPass';
    const UPDATE_CARD		= '/UpdateCard.idPass';
    const DELETE_CARD		= '/DeleteCard.idPass';

    // Entry 関係 （取引登録）
    const ENTRY_TRAN		= '/EntryTran.idPass';
    const EXEC_TRAN			= '/ExecTran.idPass';

    /**
     * エンドポイントのルートを返す
     * @param  boolean $is_sandbox テスト環境は true
     * @return [string]            エンドポイントルート
     */
    private static function get_root($is_sandbox = true){
    	$url = $is_sandbox ? 
    			'https://pt01.mul-pay.jp/payment':
    			'https://p01.mul-pay.jp/payment';
    	return $url;
    }

    public static function post($endpoint, $params, $is_sandbox = true){
    	$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_URL => self::get_root($is_sandbox).$endpoint,
			CURLOPT_CONNECTTIMEOUT => 90,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => self::build_post_array($params),
		));
		$result = curl_exec($ch);
		curl_close($ch);

		if(false === $result){
			return array(
				'success' => false,
				'message' => array('接続エラーが発生しました。')
			);
		}else{
			$params = array();
			parse_str($result, $params);
			if(isset($params['error'])){
				return array(
					'success' => false,
					'message' => array_map(array(GMOPG_Error_Handler, 'get_error_message'), explode('|', $params['error'])),
					'error_code' => explode('|', $params['error'])
				);
			}else{
				return array(
					'success' => true,
					'message' => array(),
					'params' => self::params_to_array($params),
				);
			}
		}
    }

    private static function build_post_array($params){
		$query = array();
		foreach($params as $key => $value){
			$query[] = $key.'='.urlencode(trim($value));
		}
		return implode('&', $query);
	}

	private static function params_to_array($params){

		$tmp = array();
		$result = array();
		$param_count = 0;

		// 要素が何個あるか
		foreach ($params as $key => $value) {
			$tmp[$key] = explode('|', $value);
			$param_count = count($tmp[$key]);
		}

		// 配列に入れ込む
		foreach ($tmp as $key => $value) {
			for($i=0; $i<$param_count; $i++){
				$result[$i][$key] = $value[$i];
			}
		}
		//$result = $tmp;

		return $result;
	}
}