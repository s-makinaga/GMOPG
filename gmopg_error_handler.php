<?php

class GMOPG_Error_Handler {
	/**
	 * Returns Errorm message
	 * @param string $code
	 * @return string
	 */
	public static function get_error_message($code){
		switch($code){
			case 'E00000000':
				return '特になし';
				break;
			case 'E01010001':
				return 'ショップIDが指定されていません。';
				break;
			case 'E01020001':
				return 'ショップパスワードが指定されていません。';
				break;
			case 'E01030002':
				return '指定されたIDとパスワードのショップが存在しません。';
				break;
			case 'E01040001':
				return 'オーダーIDが指定されていません。';
				break;
			case 'E01040003':
				return 'オーダーIDが最大文字数を超えています。';
				break;
			case 'E01040010':
				return '既にオーダーIDが存在しています。';
				break;
			case 'E01040013':
				return 'オーダーIDに不正な文字が存在します。';
				break;
			case 'E01050001':
				return '処理区分が指定されていません。';
				break;
			case 'E01050002':
				return '指定された処理区分は定義されていません。';
				break;
			case 'E01050004':
				return '指定した処理区分の処理は実行出来ません。';
				break;
			case 'E01060001':
				return '利用金額が指定されていません。';
				break;
			case 'E01060005':
				return '利用金額が最大桁数を超えています。';
				break;
			case 'E01060006':
				return '利用金額に数字以外の文字が含まれています。';
				break;
			case 'E01070005':
				return '税送料が最大桁数を超えています。';
				break;
			case 'E01070006':
				return '税送料に数字以外の文字が含まれています。';
				break;
			case 'E01080007':
				return '3Dセキュア使用フラグに0,1以外の値が指定されています。';
				break;
			case 'E01090001':
				return '取引IDが指定されていません。';
				break;
			case 'E01100001':
				return '取引パスワードが指定されていません。';
				break;
			case 'E01110002':
				return '指定されたIDとパスワードの取引が存在しません。';
				break;
			case 'E01120008':
				return 'カード種別の書式が誤っています。';
				break;
			case 'E01130002':
				return '指定されたカード略称が存在しません。';
				break;
			case 'E01140007':
				return '対応支払方法に0,1以外の値が指定されています。';
				break;
			case 'E01140003':
				return '対応支払方法が最大文字数を超えています。';
				break;
			case 'E01150007':
				return '対応分割回数に0,1以外の値が指定されています。';
				break;
			case 'E01160007':
				return '対応ボーナス分割回数に0,1以外の値が指定されています。';
				break;
			case 'E01170001':
				return 'カード番号が指定されていません。';
				break;
			case 'E01170003':
				return 'カード番号が最大文字数を超えています。';
				break;
			case 'E01170006':
				return 'カード番号に数字以外の文字が含まれています。';
				break;
			case 'E01170011':
				return 'カード番号が10桁～16桁の範囲ではありません。';
				break;
			case 'E01180001':
				return '有効期限が指定されていません。';
				break;
			case 'E01180003':
				return '有効期限が4桁ではありません。';
				break;
			case 'E01180006':
				return '有効期限に数字以外の文字が含まれています。';
				break;
			case 'E01190001':
				return 'サイトIDが指定されていません。';
				break;
			case 'E01200001':
				return 'サイトパスワードが指定されていません。';
				break;
			case 'E01210002':
				return '指定されたIDとパスワードのサイトが存在しません。';
				break;
			case 'E01220001':
				return '会員IDが指定されていません。';
				break;
			case 'E01230001':
				return 'カード登録連番が指定されていません。';
				break;
			case 'E01230006':
				return 'カード登録連番に数字以外の文字が含まれています。';
				break;
			case 'E01230009':
				return 'カード登録連番が最大登録可能数を超えています。';
				break;
			case 'E01240002':
				return '指定されたサイトIDと会員ID、カード連番のカードが存在しません。';
				break;
			case 'E01250010':
				return 'カードパスワードが一致しません。';
				break;
			case 'E01260001':
				return '支払方法が指定されていません。';
				break;
			case 'E01250002':
				return '指定された支払方法が存在しません。';
				break;
			case 'E01260010':
				return '指定された支払方法はご利用できません。';
				break;
			case 'E01270001':
				return '支払回数が指定されていません。';
				break;
			case 'E01270005':
				return '支払回数が1～2桁ではありません。';
				break;
			case 'E01270006':
				return '支払回数の数字以外の文字が含まれています。';
				break;
			case 'E01270010':
				return '指定された支払回数はご利用できません。';
				break;
			case 'E01280012':
				return '加盟店URLの値が最大バイト数を超えています。';
				break;
			case 'E01290001':
				return 'HTTP_ACCEPTが指定されていません。';
				break;
			case 'E01300001':
				return 'HTTP_USER_AGENTが指定されていません。';
				break;
			case 'E01310001':
				return '使用端末が指定されていません。';
				break;
			case 'E01310007':
				return '使用端末に0,1以外の値が指定されています。';
				break;
			case 'E01320012':
				return '加盟店自由項目1の値が最大バイト数を超えています。';
				break;
			case 'E01330012':
				return '加盟店自由項目2の値が最大バイト数を超えています。';
				break;
			case 'E01340012':
				return '加盟店自由項目3の値が最大バイト数を超えています。';
				break;
			case 'E01350001':
				return 'MDが指定されていません。';
				break;
			case 'E01360001':
				return 'PaREsが指定されていません。';
				break;
			case 'E01370012':
				return '3Dセキュア表示店舗名の値が最大バイト数を超えています。';
				break;
			case 'E01380007':
				return '決済方法フラグに0,1以外の値が指定されています。';
				break;
			case 'E01390002':
				return '指定されたサイトIDと会員IDの組み合わせが存在しません。';
				break;
			case 'E01390010':
				return '指定されたサイトIDと会員IDの組み合わせは既に存在しています。';
				break;
			case 'E11010001':
				return 'この取引は既に決済が終了しています。';
				break;
			case 'E11010002':
				return 'この取引は決済が終了していませんので、変更する事が出来ません。';
				break;
			case 'E11010003':
				return 'この取引は指定処理区分処理を行う事が出来ません。';
				break;
			case 'E21010001':
			case 'E21020001':
				return '3Dセキュア認証に失敗しました。もう一度、購入画面からやり直して下さい。';
				break;
			case 'E21020002':
				return '3Dセキュア認証がキャンセルされました。もう一度、購入画面からやり直して下さい。';
				break;
			case 'E41170002':
				return '入力されたカードの会社には対応していません。別のカード番号を入力して下さい。';
				break;
			case 'E41170099':
				return 'カード番号に誤りがあります。再度確認して入力して下さい。';
				break;
			case 'E90010001':
				return '現在処理を行っているのでもうしばらくお待ち下さい。';
				break;
			case 'E61010001':
			case 'E61010002':
			case 'E61010003':
			case 'E91019999':
			case 'E91029999':
			case 'E91099999':
			case '42C010000':
			case '42C030000':
			case '42C120000':
			case '42C130000':
			case '42C140000':
			case '42C150000':
			case '42C500000':
			case '42C510000':
			case '42C530000':
			case '42C540000':
			case '42C550000':
			case '42C560000':
			case '42C570000':
			case '42C580000':
			case '42C600000':
			case '42C700000':
			case '42C710000':
			case '42C720000':
			case '42C730000':
			case '42C740000':
			case '42C750000':
			case '42C760000':
			case '42C770000':
			case '42C780000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらくした後にもう一度購入画面からやり直してください。';
				break;
			case '42G020000':
			case '42G040000':
				return 'カード残高が不足しているために、決済が完了できませんでした。';
				break;
			case '42G030000':
			case '42G050000':
				return 'カード限度額を超えているために、決済が完了できませんでした。';
				break;
			case '42G420000':
				return '暗証番号が誤っていた為に、決済を完了する事が出来ませんでした。';
				break;
			case '42G540000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G550000':
				return 'カード限度額を超えているために、決済が完了できませんでした。';
				break;
			case '42G650000':
				return 'カード番号に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G670000':
				return '商品コードに誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G680000':
				return '金額に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G690000':
				return '税送料に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G700000':
				return 'ボーナス回数に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G710000':
				return 'ボーナス月に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G720000':
				return 'ボーナス額に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G730000':
				return '支払開始月に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G740000':
				return '分割回数に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G750000':
				return '分割金額に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G760000':
				return '初回金額に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G770000':
				return '業務区分に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G780000':
				return '支払区分に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G790000':
				return '照会区分に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G800000':
				return '取消区分に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G810000':
				return '取消取扱区分に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G830000':
				return '有効期限に誤りがあるために、決済を完了できませんでした。';
				break;
			case '42G950000':
			case '42G120000':
			case '42G220000':
			case '42G300000':
			case '42G560000':
			case '42G600000':
			case '42G610000':
			case '42G960000':
			case '42G970000':
			case '42G980000':
			case '42G990000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case 'M01001005':
				return 'バージョンの文字数が最大文字数を超えています。';
				break;
			case 'M01002001':
				return 'ショップIDが指定されていません。';
				break;
			case 'M01002002':
				return '指定されたIDとパスワードのショップが存在しません。';
				break;
			case 'M01002008':
				return 'ショップIDの書式が正しくありません。';
				break;
			case 'M01003001':
				return 'ショップパスワードが指定されていません。';
				break;
			case 'M01003008':
				return 'ショップパスワードの書式が正しくありません。';
				break;
			case 'M01004001':
				return 'オーダーIDが指定されていません。';
				break;
			case 'M01004002':
				return '指定されたオーダーIDの取引は登録されていません。';
				break;
			case 'M01004010':
				return '既にオーダーIDが存在しています。';
				break;
			case 'M01004012':
				return 'オーダーIDが最大文字数を超えています。';
				break;
			case 'M01004013':
				return 'オーダーIDに不正な文字が含まれています。';
				break;
			case 'M01004014':
				return '指定されたオーダーIDの取引は既に決済を依頼してます。';
				break;
			case 'M01005001':
				return '利用金額が指定されていません。';
				break;
			case 'M01005005':
				return '利用金額が最大桁数を超えています。';
				break;
			case 'M01005006':
				return '利用金額に数字以外の文字が含まれています。';
				break;
			case 'M01005011':
				return '利用金額が有効な範囲を超えています。';
				break;
			case 'M01006005':
				return '税送料が最大桁数を超えています。';
				break;
			case 'M01006006':
				return '税送料に数字以外の文字が含まれています。';
				break;
			case 'M01007001':
				return '取引IDが指定されていません。';
				break;
			case 'M01007008':
				return '取引IDの書式が正しくありません。';
				break;
			case 'M01008001':
				return '取引Iパスワードが指定されていません。';
				break;
			case 'M01008008':
				return '取引パスワードの書式が正しくありません。';
				break;
			case 'M01009001':
				return '支払先コンビニコードが指定されていません。';
				break;
			case 'M01009002':
				return '指定された支払先コンビニコードが正しくありません。';
				break;
			case 'M01009005':
				return '支払先コンビニコードが最大文字数を超えています。';
				break;
			case 'M01010001':
				return '氏名が指定されていません。';
				break;
			case 'M01010012':
				return '氏名が最大バイト数を超えています。';
				break;
			case 'M01010013':
				return '氏名に不正な文字が含まれています。';
				break;
			case 'M01011001':
				return 'フリガナが指定されていません。';
				break;
			case 'M01011012':
				return 'フリガナが最大バイト数を超えています。';
				break;
			case 'M01011013':
				return 'フリガナに不正な文字が含まれています。';
				break;
			case 'M01012001':
				return '電話番号が指定されていません。';
				break;
			case 'M01012005':
				return '電話番号が最大文字数を超えています。';
				break;
			case 'M01012008':
				return '電話番号の書式が正しくありません。';
				break;
			case 'M01013005':
				return '支払期限日数が最大文字数を超えています。';
				break;
			case 'M01013006':
				return '支払期限日数に数字以外の文字が指定されています。';
				break;
			case 'M01013011':
				return '支払期限日数が有効な範囲ではありません。';
				break;
			case 'M01014001':
				return '結果通知先メールアドレスが指定されていません。';
				break;
			case 'M01014005':
				return '結果通知先メールアドレスが最大文字数を超えています。';
				break;
			case 'M01014008':
				return '結果通知先メールアドレスの書式が正しくありません。';
				break;
			case 'M01015005':
				return '加盟店メールアドレスが最大文字数を超えています。';
				break;
			case 'M01015008':
				return '加盟店メールアドレスの書式が正しくありません。';
				break;
			case 'M01016012':
				return '予約番号が最大バイト数を超えています。';
				break;
			case 'M01016013':
				return '予約番号に不正な文字が含まれています。';
				break;
			case 'M01017012':
				return '会員番号が最大バイト数を超えています。';
				break;
			case 'M01017013':
				return '会員番号に不正な文字が含まれています。';
				break;
			case 'M01018012':
				return 'POSレジ表示欄1が最大バイト数を超えています。';
				break;
			case 'M01018013':
				return 'POSレジ表示欄1に不正な文字が含まれています。';
				break;
			case 'M01019012':
				return 'POSレジ表示欄2が最大バイト数を超えています。';
				break;
			case 'M01019013':
				return 'POSレジ表示欄2に不正な文字が含まれています。';
				break;
			case 'M01020012':
				return 'POSレジ表示欄3が最大バイト数を超えています。';
				break;
			case 'M01020013':
				return 'POSレジ表示欄3に不正な文字が含まれています。';
				break;
			case 'M01021012':
				return 'POSレジ表示欄4が最大バイト数を超えています。';
				break;
			case 'M01021013':
				return 'POSレジ表示欄4に不正な文字が含まれています。';
				break;
			case 'M01022012':
				return 'POSレジ表示欄5が最大バイト数を超えています。';
				break;
			case 'M01022013':
				return 'POSレジ表示欄5に不正な文字が含まれています。';
				break;
			case 'M01023012':
				return 'POSレジ表示欄6が最大バイト数を超えています。';
				break;
			case 'M01023013':
				return 'POSレジ表示欄6に不正な文字が含まれています。';
				break;
			case 'M01024012':
				return 'POSレジ表示欄7が最大バイト数を超えています。';
				break;
			case 'M01024013':
				return 'POSレジ表示欄7に不正な文字が含まれています。';
				break;
			case 'M01025012':
				return 'POSレジ表示欄8が最大バイト数を超えています。';
				break;
			case 'M01025013':
				return 'POSレジ表示欄8に不正な文字が含まれています。';
				break;
			case 'M01026012':
				return 'レシート表示欄1が最大バイト数を超えています。';
				break;
			case 'M01026013':
				return 'レシート表示欄1に不正な文字が含まれています。';
				break;
			case 'M01027012':
				return 'レシート表示欄2が最大バイト数を超えています。';
				break;
			case 'M01027013':
				return 'レシート表示欄2に不正な文字が含まれています。';
				break;
			case 'M01028012':
				return 'レシート表示欄3が最大バイト数を超えています。';
				break;
			case 'M01028013':
				return 'レシート表示欄3に不正な文字が含まれています。';
				break;
			case 'M01029012':
				return 'レシート表示欄4が最大バイト数を超えています。';
				break;
			case 'M01029013':
				return 'レシート表示欄4に不正な文字が含まれています。';
				break;
			case 'M01030012':
				return 'レシート表示欄5が最大バイト数を超えています。';
				break;
			case 'M01030013':
				return 'レシート表示欄5に不正な文字が含まれています。';
				break;
			case 'M01031012':
				return 'レシート表示欄6が最大バイト数を超えています。';
				break;
			case 'M01031013':
				return 'レシート表示欄6に不正な文字が含まれています。';
				break;
			case 'M01032012':
				return 'レシート表示欄7が最大バイト数を超えています。';
				break;
			case 'M01032013':
				return 'レシート表示欄7に不正な文字が含まれています。';
				break;
			case 'M01033012':
				return 'レシート表示欄8が最大バイト数を超えています。';
				break;
			case 'M01033013':
				return 'レシート表示欄8に不正な文字が含まれています。';
				break;
			case 'M01034012':
				return 'レシート表示欄9が最大バイト数を超えています。';
				break;
			case 'M01034013':
				return 'レシート表示欄9に不正な文字が含まれています。';
				break;
			case 'M01035012':
				return 'レシート表示欄10が最大バイト数を超えています。';
				break;
			case 'M01035013':
				return 'レシート表示欄10に不正な文字が含まれています。';
				break;
			case 'M01036001':
				return 'お問合せ先が指定されていません。';
				break;
			case 'M01036012':
				return 'お問合せ先が最大バイト数を超えています。';
				break;
			case 'M01036013':
				return 'お問合せ先に不正な文字が含まれています。';
				break;
			case 'M01037001':
				return 'お問合せ先電話番号が指定されていません。';
				break;
			case 'M01037005':
				return 'お問合せ先電話番号が最大文字数を超えています。';
				break;
			case 'M01037008':
				return 'お問合せ先電話番号に数字、−以外の文字が指定されています。';
				break;
			case 'M01038001':
				return 'お問合せ先受付時間が指定されていません。';
				break;
			case 'M01038005':
				return 'お問合せ先受付時間が最大文字数を超えています。';
				break;
			case 'M01038008':
				return 'お問合せ先受付時間に数字、”:”、”-“以外の文字が指定されています。';
				break;
			case 'M01039012':
				return '加盟店自由項目1が最大バイト数を超えています。';
				break;
			case 'M01039013':
				return '加盟店自由項目1に不正な文字が含まれています。';
				break;
			case 'M01040012':
				return '加盟店自由項目2が最大バイト数を超えています。';
				break;
			case 'M01040013':
				return '加盟店自由項目2に不正な文字が含まれています。';
				break;
			case 'M01041012':
				return '加盟店自由項目3が最大バイト数を超えています。';
				break;
			case 'M01041013':
				return '加盟店自由項目3に不正な文字が含まれています。';
				break;
			case 'M01042005':
				return '結果返却方法フラグが最大文字数を超えています。';
				break;
			case 'M01042011':
				return '結果返却方法フラグに”0”,”1”以外の値が指定されています。';
				break;
			case 'M01043001':
				return '商品・サービス名が指定されていません。';
				break;
			case 'M01043012':
				return '商品・サービス名が最大バイト数を超えています。';
				break;
			case 'M01043013':
				return '商品・サービス名に不正な文字が含まれています。';
				break;
			case 'M01044012':
				return '決済開始メール付加情報が最大バイト数を超えています。';
				break;
			case 'M01044013':
				return '決済開始メール付加情報に不正な文字が含まれています。';
				break;
			case 'M01045012':
				return '決済完了メール付加情報が最大バイト数を超えています。';
				break;
			case 'M01045013':
				return '決済完了メール付加情報に不正な文字が含まれています。';
				break;
			case 'M01046012':
				return '決済内容確認画面付加情報が最大バイト数を超えています。';
				break;
			case 'M01046013':
				return '決済内容確認画面付加情報に不正な文字が含まれています。';
				break;
			case 'M01047012':
				return '決済完了画面付加情報が最大バイト数を超えています。';
				break;
			case 'M01047013':
				return '決済完了画面付加情報に不正な文字が含まれています。';
				break;
			case 'M01048005':
				return '支払期限秒数が最大文字数を超えています。';
				break;
			case 'M01048006':
				return '支払期限秒数に数字以外の文字が指定されています。';
				break;
			case 'M01048011':
				return '支払期限秒数が有効な範囲ではありません。';
				break;
			case 'M01049012':
				return '決済開始メール付加情報が最大バイト数を超えています。';
				break;
			case 'M01049013':
				return '決済開始メール付加情報に不正な文字が含まれています。';
				break;
			case 'M01050012':
				return '決済完了メール付加情報が最大バイト数を超えています。';
				break;
			case 'M01050013':
				return '決済完了メール付加情報に不正な文字が含まれています。';
				break;
			case 'M01051001':
				return '決済方法が指定されていません。';
				break;
			case 'M01051005':
				return '決済方法が最大文字数を超えています。';
				break;
			case 'M01051011':
				return '決済方法が有効な範囲ではありません。';
				break;
			case 'M01052011':
				return '支払期限日を超えています。';
				break;
			case 'M01053002':
				return '指定されたコンビニはご利用できません。';
				break;
			case 'M01054001':
				return '処理区分が指定されていません。';
				break;
			case 'M01054004':
				return '取引の現状態に対して、処理可能な操作ではありません。';
				break;
			case 'M01054010':
				return '指定された処理区分は定義されていません。';
				break;
			case 'M01055010':
				return '取引の利用金額・税送料の合計値が、指定された利用金額・税送料の合計値と一致しません。';
				break;
			case 'M01055011':
				return '指定された利用金額・税送料の合計値が取引の利用金額・税送料の合計値を超えています。';
				break;
			case 'M01056001':
				return 'リダイレクトURLが指定されていません。';
				break;
			case 'M01056012':
				return 'リダイレクトURLが最大文字数を超えています。';
				break;
			case 'M01057010':
				return '取消可能な期間を超えています。';
				break;
			case 'M01058002':
				return '指定された取引が存在しません。';
				break;
			case 'M01058010':
				return '取引のショップIDが、指定されたショップIDと一致しません。';
				break;
			case 'M01059001':
				return '戻り先URLが設定されていません。';
				break;
			case 'M01059005':
				return '戻り先URLが最大文字数を超えています。';
				break;
			case 'M01059012':
				return '戻り先URLが最大文字数を超えています。';
				break;
			case 'M01060010':
				return '仮売上有効期間を超えています。';
				break;
			case 'M01061001':
				return '金融機関コードが設定されていません。';
				break;
			case 'M01061002':
				return '存在しない金融機関コードが設定されました。';
				break;
			case 'M01061005':
				return '金融機関コードが最大桁数を超えています。';
				break;
			case 'M01062001':
				return '支店コードが設定されていません。';
				break;
			case 'M01062002':
				return '存在しない支店コードが設定されました。';
				break;
			case 'M01062005':
				return '支店コードが最大桁数を超えています。';
				break;
			case 'M01063001':
				return '会員登録区分が設定されていません。';
				break;
			case 'M01063002':
				return '存在しない会員登録区分が設定されました。';
				break;
			case 'M01064001':
				return '口座名義人（姓：漢字）が設定されていません。';
				break;
			case 'M01064003':
				return '口座名義人（姓：漢字）が最大文字数を超えています。';
				break;
			case 'M01064013':
				return '口座名義人（姓：漢字）に利用できない文字が含まれています。';
				break;
			case 'M01065001':
				return '口座名義人（姓：読み）が設定されていません。';
				break;
			case 'M01065003':
				return '口座名義人（姓：読み）が最大文字数を超えています。';
				break;
			case 'M01065013':
				return '口座名義人（姓：読み）に利用できない文字が含まれています。';
				break;
			case 'M01066001':
				return '口座名義人（名：漢字）が設定されていません。';
				break;
			case 'M01066003':
				return '口座名義人（名：漢字）が最大文字数を超えています。';
				break;
			case 'M01066013':
				return '口座名義人（名：漢字）に利用できない文字が含まれています。';
				break;
			case 'M01067001':
				return '口座名義人（名：読み）が設定されていません。';
				break;
			case 'M01067003':
				return '口座名義人（名：読み）が最大文字数を超えています。';
				break;
			case 'M01067013':
				return '口座名義人（名：読み）に利用できない文字が含まれています。';
				break;
			case 'M01068001':
				return '口座名義人（法人名漢字）が設定されていません。';
				break;
			case 'M01068003':
				return '口座名義人（法人名漢字）が最大文字数を超えています。';
				break;
			case 'M01068013':
				return '口座名義人（法人名漢字）に利用できない文字が含まれています。';
				break;
			case 'M01069001':
				return '口座名義人（法人名読み）が設定されていません。';
				break;
			case 'M01069003':
				return '口座名義人（法人名読み）が最大文字数を超えています。';
				break;
			case 'M01069013':
				return '口座名義人（法人名読み）に利用できない文字が含まれています。';
				break;
			case 'M01070001':
				return '口座番号が設定されていません。';
				break;
			case 'M01070002':
				return '存在しない預金種目が設定されました。';
				break;
			case 'M01071001':
				return '口座番号が設定されていません。';
				break;
			case 'M01071005':
				return '口座番号が最大桁数を超えています。';
				break;
			case 'M01071006':
				return '口座番号に数字以外の文字が含まれています。';
				break;
			case 'M01073001':
				return 'トランザクションIDが設定されていません。';
				break;
			case 'M01073002':
				return '存在しないトランザクションIDが指定されました。';
				break;
			case 'M01073004':
				return '指定した申込処理は実行出来ません。';
				break;
			case 'M01074090':
				return 'トークンが不正です。';
				break;
			case 'M01075001':
				return '口座名義が設定されていません。';
				break;
			case 'M01075005':
				return '口座名義が最大文字数を超えています。';
				break;
			case 'M01075013':
				return '口座名義に利用できない文字が含まれています。';
				break;
			case 'M01076001':
				return 'ユーザ利用端末が設定されていません。';
				break;
			case 'M01076010':
				return '指定されたユーザ利用端末は定義されていません。';
				break;
			case 'M01077005':
				return '口座名義漢字が最大文字数を超えています。';
				break;
			case 'M01077013':
				return '口座名義漢字に利用できない文字が含まれています。';
				break;
			case 'M01078005':
				return '通貨コードの桁数が間違っています。';
				break;
			case 'M01078010':
				return '利用可能な通貨コードではありません。';
				break;
			case 'M01079010':
				return '利用可能なロケールではありません。';
				break;
			case 'M01080001':
				return '摘要が設定されていません。';
				break;
			case 'M01080005':
				return '摘要が最大文字数を超えています。';
				break;
			case 'M01080013':
				return '摘要に利用できない文字が含まれています。';
				break;
			case 'M01081011':
				return '決済結果URL有効期限秒が有効な範囲ではありません。';
				break;
			case 'M01081013':
				return '決済結果URL有効期限秒に利用できない文字が含まれています。';
				break;
			case 'M01082001':
				return 'サービス名が設定されていません。';
				break;
			case 'M01082005':
				return 'サービス名が最大文字数を超えています。';
				break;
			case 'M01082013':
				return 'サービス名に利用できない文字が含まれています。';
				break;
			case 'M01083001':
				return 'サービス電話番号が設定されていません。';
				break;
			case 'M01084002':
				return '存在しないOpenIDが指定されました。';
				break;
			case 'M01085001':
				return 'キャンセル金額が指定されていません。';
				break;
			case 'M01085005':
				return 'キャンセル金額が最大桁数を超えています。';
				break;
			case 'M01085006':
				return 'キャンセル金額に数字以外の文字が含まれています。';
				break;
			case 'M01085010':
				return 'オーソリ時の金額とキャンセル金額が一致しません。';
				break;
			case 'M01085011':
				return 'キャンセル金額がオーソリ時の金額を超えています。';
				break;
			case 'M01086005':
				return 'キャンセル税送料が最大桁数を超えています。';
				break;
			case 'M01086006':
				return 'キャンセル税送料に数字以外の文字が含まれています。';
				break;
			case 'M01087012':
				return 'ドコモ表示項目1が最大桁数を超えています。';
				break;
			case 'M01087013':
				return 'ドコモ表示項目1に利用できない文字が含まれています。';
				break;
			case 'M01088012':
				return 'ドコモ表示項目2が最大桁数を超えています。';
				break;
			case 'M01088013':
				return 'ドコモ表示項目2に利用できない文字が含まれています。';
				break;
			case 'M01089010':
				return '処理要求実施最終期限を超えています。';
				break;
			case 'M01500001':
				return 'ショップ情報文字列が設定されていません。';
				break;
			case 'M01500005':
				return 'ショップ情報文字列の文字数が間違っています。';
				break;
			case 'M01500012':
				return 'ショップ情報文字列が他の項目と矛盾しています。';
				break;
			case 'M01510001':
				return '購買情報文字列が設定されていません。';
				break;
			case 'M01510005':
				return '購買情報文字列の文字数が間違っています。';
				break;
			case 'M01510012':
				return '購買情報文字列が他の項目と矛盾しています。';
				break;
			case 'M01520002':
				return 'ユーザー利用端末情報に無効な値が設定されています。';
				break;
			case 'M01530001':
				return '決済結果戻り先URLが設定されていません。';
				break;
			case 'M01530005':
				return '決済結果戻り先URLが最大文字数を越えています。';
				break;
			case 'M01540005':
				return '決済キャンセル時URLが最大文字数を超えています。';
				break;
			case 'M01550001':
				return '日時情報文字列が設定されていません。';
				break;
			case 'M01550005':
				return '日時情報文字列の文字数が間違っています。';
				break;
			case 'M01550006':
				return '日時情報文字列に無効な文字が含まれます。';
				break;
			case 'M01590005':
				return '商品コードが最大桁数を超えています。';
				break;
			case 'M01590006':
				return '商品コードに無効な文字が含まれます。';
				break;
			case 'M01600001':
				return '会員情報チェック文字列が設定されていません。';
				break;
			case 'M01600005':
				return '会員情報チェック文字列が最大文字数を超えています。';
				break;
			case 'M01600012':
				return '会員情報チェック文字列が他の項目と矛盾しています。';
				break;
			case 'M01610005':
				return 'リトライ回数が0∼99の範囲外です。';
				break;
			case 'M01610006':
				return 'リトライ回数に数字以外が設定されています。';
				break;
			case 'M01620005':
				return 'セッションタイムアウト値が0∼9999の範囲外です。';
				break;
			case 'M01620006':
				return 'セッションタイムアウト値に数字以外が設定されています。';
				break;
			case 'M01630010':
				return '取引後カード登録時、取引の会員Dとパラメータの会員IDが一致しません。';
				break;
			case 'M01640010':
				return '取引後カード登録時、取引のサイトIDとパラメータのサイトIDが一致しません。';
				break;
			case 'M01650012':
				return '指定されたショップは、指定されたサイトに属していません。';
				break;
			case 'M01660013':
				return '言語パラメータにサポートされない値が設定されています。';
				break;
			case 'M01670013':
				return '出力エンコーディングにサポートされない値が設定されています。';
				break;
			case 'M01680001':
				return '決済利用フラグが設定されていません。';
				break;
			case 'M01680008':
				return '決済利用フラグに”0”,”1”以外の値が指定されています。';
				break;
			case 'M01700001':
				return 'メールリンクのご利用契約が無いか、利用停止中です。';
				break;
			case 'M01701002':
				return '呼び出したメールリンクデータは存在しません。';
				break;
			case 'M01702003':
				return '呼び出したメールリンクデータは有効期限切れです。';
				break;
			case 'M01703001':
				return 'ユニーク文字列が指定されていません。';
				break;
			case 'M01703005':
				return 'ユニーク文字列の長さが32バイト以外です。';
				break;
			case 'M01704005':
				return 'テンプレート番号が1桁を超えています。';
				break;
			case 'M01704006':
				return 'テンプレート番号に数字以外が設定されています。';
				break;
			case 'M11010099':
				return 'この取引は決済が終了していません。';
				break;
			case 'M11010999':
				return '特になし';
				break;
			case 'M91099999':
				return '決済処理に失敗しました。';
				break;
			case '42C010000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C030000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C120000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C130000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C140000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C150000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C500000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C510000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C530000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C540000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C550000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C560000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C570000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C580000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C710000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C720000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C730000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C740000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C750000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C760000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C770000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42C780000':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case '42G020000':
				return 'カード残高が不足しているために、決済を完了する事が出来ませんでした。';
				break;
			case '42G030000':
				return 'カード限度額を超えているために、決決済を完了する事が出来ませんでした。';
				break;
			case '42G040000':
				return 'カード残高が不足しているために、決済を完了する事が出来ませんでした。';
				break;
			case '42G050000':
				return 'カード限度額を超えているために、決済を完了する事が出来ませんでした。';
				break;
			case '42G120000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G220000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G300000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G420000':
				return '暗証番号が誤っていた為に、決済を完了する事が出来ませんでした。';
				break;
			case '42G440000':
				return 'セキュリティーコードが誤っていた為に、決済を完了する事が出来ませんでした。';
				break;
			case '42G450000':
				return 'セキュリティーコードが入力されていない為に、決済を完了する事が出来ませんでした。';
				break;
			case '42G540000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G550000':
				return 'カード限度額を超えているために、決済を完了する事が出来ませんでした。';
				break;
			case '42G560000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G600000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G610000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G650000':
				return 'カード番号に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G670000':
				return '商品コードに誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G680000':
				return '金額に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G690000':
				return '税送料に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G700000':
				return 'ボーナス回数に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G710000':
				return 'ボーナス月に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G720000':
				return 'ボーナス額に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G730000':
				return '支払開始月に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G740000':
				return '分割回数に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G750000':
				return '分割金額に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G760000':
				return '初回金額に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G770000':
				return '業務区分に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G780000':
				return '支払区分に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G790000':
				return '照会区分に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G800000':
				return '取消区分に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G810000':
				return '取消取扱区分に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G830000':
				return '有効期限に誤りがあるために、決済を完了する事が出来ませんでした。';
				break;
			case '42G950000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G960000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G970000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G980000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case '42G990000':
				return 'このカードでは取引をする事が出来ません。';
				break;
			case 'S01000002':
				return 'モバイルSuicaアプリのネット決済一覧から決済を行ってください';
				break;
			case 'S01001001':
				return '決済依頼処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'S01001002':
				return '決済依頼処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'S01001006':
				return 'モバイルSuica決済は利用できません。';
				break;
			case 'S01001007':
				return 'モバイルSuicaの登録が終わってから、再度購入画面からやり直してください。';
				break;
			case 'S01001008':
				return 'モバイルSuica決済の決済依頼件数がオーバーしています。モバイルSuicaアプリのネット決済一覧確認してから、再度購入画面からやり直してください。';
				break;
			case 'S01001010':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'S01001015':
				return 'モバイルSuicaの登録状況を確認した後、再度購入画面からやり直してください。';
				break;
			case 'S01001016':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'S01001017':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してく';
				break;
			case 'S01009901':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'S01009902':
				return '決済処理に失敗しました。申し訳ございませんが、しばらく時間をあけて購入画面からやり直してください。';
				break;
			case 'F01001001':
				return 'ショップIDが指定されていません。';
				break;
			case 'F01001008':
				return 'ショップIDに半角英数字以外の文字が含まれているか、13文字を超えています。';
				break;
			case 'F01002001':
				return 'ショップパスワードが指定されていません。';
				break;
			case 'F01002008':
				return 'ショップパスワードに半角英数字以外の文字が含まれているか、10文字を超えています。';
				break;
			case 'F01003002':
				return '指定されたIDのショップが存在しません。';
				break;
			case 'F01004001':
				return '照会IDが指定されていません。';
				break;
			case 'F01004002':
				return '指定されたIDの照会が存在しません。';
				break;
			case 'F01004005':
				return '照会IDが最大桁数を超えています。';
				break;
			case 'F01010001':
				return '住所（都道府県）が指定されていません。';
				break;
			case 'F01010012':
				return '住所（都道府県）が最大バイト数を超えています。';
				break;
			case 'F01011001':
				return '住所（市区町村）が指定されていません。';
				break;
			case 'F01011012':
				return '住所（市区町村）が最大バイト数を超えています。';
				break;
			case 'F01012001':
				return '住所（地名）が指定されていません。';
				break;
			case 'F01012012':
				return '住所（地名）が最大バイト数を超えています。';
				break;
			case 'F01013001':
				return '住所（番地・丁目）が指定されていません。';
				break;
			case 'F01013012':
				return '住所（番地・丁目）が最大バイト数を超えています。';
				break;
			case 'F01014012':
				return '住所（号室）が最大バイト数を超えています。';
				break;
			case 'F01015005':
				return '電話番号が最大文字数を超えています。';
				break;
			case 'F01015008':
				return '電話番号に数字、−以外の文字が指定されています。';
				break;
			case 'F01020008':
				return 'レコード区分にHD以外の値が指定されています。';
				break;
			case 'F01021008':
				return 'レコード区分にDT以外の値が指定されています。';
				break;
			case 'F01022008':
				return 'レコード区分にFT以外の値が指定されています。';
				break;
			case 'F01023008':
				return '項目数が誤っています。';
				break;
			case 'F01024008':
				return '項目数が誤っています。';
				break;
			case 'F01025008':
				return '項目数が誤っています。';
				break;
			case 'F01026008':
				return '項目数が誤っています。';
				break;
			case 'F01030001':
				return 'データレコード件数が指定されていません。';
				break;
			case 'F01030006':
				return 'データレコード件数に数字以外の文字が含まれています。';
				break;
			case 'F01030011':
				return 'データレコード件数が1∼20000の範囲ではありません。';
				break;
			case 'F01040010':
				return 'ヘッダレコードのレコード件数とデータレコードの件数が一致しません。';
				break;
			case 'F01050001':
				return '同一ショップ内で照会Ｉ／Ｆの照会実行中に照会データ登録が実行されました。';
				break;
			case 'F01060001':
				return '照会機能が利用停止になっています。';
				break;
			case 'F01070001':
				return '照会データが指定されていません。';
				break;
			case 'F01090999':
				return '照会実行中にエラーが発生しました。';
				break;
			case 'N01001001':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001002':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001003':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001004':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001005':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001006':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001007':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001008':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N01001009':
				return '実行中にエラーが発生しました。処理は開始されませんでした。';
				break;
			case 'N10000001':
				return '該当する取引がありません。';
				break;
			case 'N0C030C01':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C03':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C12':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C13':
				return 'しばらくご利用になれません。';
				break;
			case 'N0C030C14':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C15':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C16':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C33':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C34':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C49':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C50':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C51':
				return 'もう一度やり直してください。';
				break;
			case 'N0C030C53':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C54':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C55':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C56':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C57':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C58':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030C60':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030G03':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G12':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G30':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G54':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G55':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G56':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G60':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G61':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G65':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G67':
				return 'しばらくしてからやり直してください。';
				break;
			case 'N0C030G83':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G85':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G95':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G96':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G97':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0C030G98':
				return 'もう一度やり直してください。';
				break;
			case 'N0C030G99':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N010007':
				return 'お客様の携帯電話ではサービスをご利用いただけません。';
				break;
			case 'N0N010008':
				return 'お客様の携帯電話ではサービスをご利用いただけません。';
				break;
			case 'N0N010009':
				return 'お客様の携帯電話ではサービスをご利用いただけません。';
				break;
			case 'N0N010013':
				return 'しばらくご利用になれません。店舗までお問合せください。';
				break;
			case 'N0N010024':
				return 'しばらくご利用になれません。店舗までお問合せください。';
				break;
			case 'N0N010032':
				return 'しばらくご利用になれません。店舗までお問合せください。';
				break;
			case 'N0N020014':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0N020017':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020018':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020019':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020020':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020021':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020022':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N020023':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N030038':
				return '暗証番号が誤っていますので、現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0N040014':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0K040026':
				return 'もう一度やり直してください。';
				break;
			case 'N0K040027':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0K040028':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0K040029':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0N040031':
			case 'N0K040037':
				return 'しばらくご利用になれません。店舗までお問合せください。';
				break;
			case 'N0T000001':
				return 'もう一度やり直してください。';
				break;
			case 'N0T000002':
				return 'ご利用可能なカードが設定されていないため、お支払を継続できません。なお、iDでお支払いただくには事前にカードを設定いただく必要がありますｊ。';
				break;
			case 'N0T000003':
				return 'ご利用可能なカードが設定されていないため、お支払を継続できません。なお、iDでお支払いただくには事前にカードを設定いただく必要がありますｊ。';
				break;
			case 'N0T000004':
				return 'パスワード入力間違いが規定回数を超えたため、iDでのお支払を継続できません。なお、iDを再度ご利用いただくには、iDアプリを再度起動しリセットを実行した後、カードを設定しなおしていただく必要があります。';
				break;
			case 'N0T000005':
				return 'ICカードロックを設定されている場合は、一旦iDアプリを終了し、ICカードロックを解除してから再度iDアプリを起動してください。ICカードロックを解除してもご利用いただけない場合はカード会社へお問合せください。';
				break;
			case 'N0T000006':
				return 'エラーが発生しました。店舗までお問合せください。';
				break;
			case 'N0T000009':
				return '現在このカードはお取扱できません。カード会社にお問合せください。';
				break;
			case 'N0T000007':
			case 'N0T000008':
			case 'N0T000010':
				return 'もう一度やり直してください。';
				break;
			default:
				return '原因不明のエラーが発生しました。';
				break;
		}
	}
}