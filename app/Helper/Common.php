<?php
namespace App\Helper;

class Common
{
    static function removeVietnameseTones($str) {
        $str = preg_replace('/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/',"a",$str);
        $str = preg_replace('/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/',"e", $str);
        $str = preg_replace('/ì|í|ị|ỉ|ĩ/',"i", $str);
        $str = preg_replace('/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/',"o", $str);
        $str = preg_replace('/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/',"u", $str);
        $str = preg_replace('/ỳ|ý|ỵ|ỷ|ỹ/',"y", $str);
        $str = preg_replace('/đ/',"d", $str);
        $str = preg_replace('/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/', "A", $str);
        $str = preg_replace('/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/', "E", $str);
        $str = preg_replace('/Ì|Í|Ị|Ỉ|Ĩ/', "I", $str);
        $str = preg_replace('/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/', "O", $str);
        $str = preg_replace('/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/', "U", $str);
        $str = preg_replace('/Ỳ|Ý|Ỵ|Ỷ|Ỹ/', "Y", $str);
        $str = preg_replace('/Đ/', "D", $str);
        // Some system encode vietnamese combining accent as individual utf-8 characters
        // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
        $str = preg_replace('/\u0300|\u0301|\u0303|\u0309|\u0323/', "", $str); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
        $str = preg_replace('/\u02C6|\u0306|\u031B/', "", $str); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
        // Remove extra spaces
        // Bỏ các khoảng trắng liền nhau
        $str = preg_replace('/ + /'," ", $str);
        $str = preg_replace('/\s/', '-', $str);
        $str = trim($str);
        // Remove punctuations
        // Bỏ dấu câu, kí tự đặc biệt
        $str = preg_replace('/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\:|\;|\'|\"|\”|\“|\&|\#|\[|\]|~|\$|_|`|{|}|\|/',"", $str);
        $str = str_replace('\\', '', $str );
        return $str;
    }
}
