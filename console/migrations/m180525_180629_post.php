<?php

use yii\db\Migration;

/**
 * Class m180525_180629_post
 */
class m180525_180629_post extends Migration
{
    
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'date'=>$this->date()->notNull(),
            'anons'=>$this->text()->notNull(),
            'articles'=>$this->text()->notNull(),
            'profile_pic' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%post}}');
    }
    
}
