<?php

use yii\db\Migration;

/**
 * Class m180412_094508_create_table_access
 */
class m180412_094508_create_table_access extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('access', [
           'id'=> $this->primaryKey()->notNull(),
            'note_id'=> $this->integer()->notNull(),
            'user_id'=> $this->integer()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('access');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180412_094508_create_table_access cannot be reverted.\n";

        return false;
    }
    */
}
