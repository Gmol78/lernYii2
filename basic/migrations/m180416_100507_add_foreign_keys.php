<?php

use yii\db\Migration;

/**
 * Class m180416_100507_add_foreign_keys
 */
class m180416_100507_add_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \Yii::$app->db->createCommand()-> addForeignKey('fx_access_user', 'access', ['user_id'], 'user', ['id'])->execute();
        \Yii::$app->db->createCommand()-> addForeignKey('fx_access_note', 'access', ['note_id'], 'note', ['id'])->execute();
        \Yii::$app->db->createCommand()-> addForeignKey('fx_note_user', 'note', ['creator_id'], 'user', ['id'])->execute();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180416_100507_add_foreign_keys cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_100507_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
