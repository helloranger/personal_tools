<?php
namespace backend\models;

use backend\models\base\Note as BaseNote;
use yii\behaviors\TimestampBehavior;

class Note extends BaseNote
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className()
        ];
    }

    public function fields()
    {
        $parent = parent::fields();
        unset($parent['del']);
        return $parent;
    }
}
