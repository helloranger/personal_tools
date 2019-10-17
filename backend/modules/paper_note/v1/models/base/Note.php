<?php

namespace backend\models\base;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property int $id
 * @property string $title 标题
 * @property string $content 内容
 * @property int $status 状态
 * @property int $del 是否删除
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['status', 'del', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'status' => '状态',
            'del' => '是否删除',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
