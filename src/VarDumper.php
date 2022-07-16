<?php

namespace yii\helpers;

/**
 *
 * ```php
 * VarDumper::die($var);
 * ```
 *
 * @author Susheng Yang <ez@bestyii.com>
 * @since 1.0
 */
class VarDumper extends BaseVarDumper
{
    public static function die($var, $depth = 10, $highlight = true)
    {
         self::dump($var,$depth,$highlight);
         exit;
    }
}
