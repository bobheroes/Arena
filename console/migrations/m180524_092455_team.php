<?php

use yii\db\Migration;

/**
 * Class m180524_092455_team
 */
class m180524_092455_team extends Migration
{    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%team}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'info' => $this->text()->notNull(),
            'link' => $this->string()->notNull(),
            'profile_pic' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%team}}');
    }
    
}
