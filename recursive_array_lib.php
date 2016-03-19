<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Recursive_array_lib
{
    var $CI;

    function Recursive_array_lib()
    {

        $this->CI =& get_instance();//ana class dışından işlem yapmak için $CI =& get_instance(); satırını yazıp $CI değişkenini $this gibi kullanabiliyoruz.
        $CI =& get_instance();

        $this->CI = &get_instance();
        $this->CI->load->helper('string');

    }


    function recursive(array $arrList, $parentIdName, $idName, $parentId = 0)
    {

        $branch = array();

        foreach ($arrList as $arr) {
            if ($arr[$parentIdName] == $parentId) {

                $children = $this->recursive($arrList,$parentIdName,$idName, $arr[$idName]);

                if ($children) {
                    $arr['children'] = $children;
                }
                $branch[] = $arr;

                //$branch[]=$children;
            }
        }

        return $branch;
    }


}

?>
