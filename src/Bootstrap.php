<?php

namespace bestyii\helpers;

use Yii;
use yii\base\BootstrapInterface;
use yii\base\Component;

class Bootstrap extends Component implements BootstrapInterface
{

    public function bootstrap($app)
    {
        Yii::$classMap['yii\\helpers\\VarDumper'] = '@bestyii/helpers/VarDumper.php';
    }
}