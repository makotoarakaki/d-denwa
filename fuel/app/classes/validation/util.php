<?php

/**
 * 独自バリデーションを追加
 */
class Validation_Util
{
	// 元号入力チェック
    public static function _validation_empty_gengo($gengo, $data)
    {
        if(empty($gengo)) {
            if (!empty($data)) {
                return false;
            }
            else {
                return true;
            }
        }
        return true;
    }

	//年月日入力チェック
    public static function _validation_empty_nengappi($data, $gengo)
    {
        if(!empty($gengo)) {
            if (empty($data)) {
                return false;
            }
            else {
                return true;
            }
        }
        return true;
    }
}