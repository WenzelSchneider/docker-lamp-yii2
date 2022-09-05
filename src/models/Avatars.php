<?php

namespace app\models;

use Yii;

class Avatars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avatars';
    }
}