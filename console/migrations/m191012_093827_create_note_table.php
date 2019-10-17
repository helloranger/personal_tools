<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%note}}`.
 */
class m191012_093827_create_note_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%note}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(64)->comment('标题'),
            'content' => $this->text()->comment('内容'),
            'status' => $this->integer(1)->comment('状态'),
            'del' => $this->integer(1)->comment('是否删除')->defaultValue(0),
            'created_at' => $this->integer(11)->comment('创建时间'),
            'updated_at' => $this->integer(11)->comment('更新时间'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%note}}');
    }
}
