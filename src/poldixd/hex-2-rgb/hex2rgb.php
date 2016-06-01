<?php

namespace poldixd\hex2rgb;


class hex2rgb
{
    public static function convert($strHex)
    {
        $strHex = str_replace("#", "", $strHex);

        if(strlen($strHex) == 3)
        {
            $r = hexdec(substr($strHex,0,1).substr($strHex,0,1));
            $g = hexdec(substr($strHex,1,1).substr($strHex,1,1));
            $b = hexdec(substr($strHex,2,1).substr($strHex,2,1));
        }
        else
        {
            $r = hexdec(substr($strHex,0,2));
            $g = hexdec(substr($strHex,2,2));
            $b = hexdec(substr($strHex,4,2));
        }
        $rgb = array($r, $g, $b);

        return $rgb;
    }
}