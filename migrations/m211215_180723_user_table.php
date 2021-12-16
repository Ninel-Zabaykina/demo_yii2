<?php

use yii\db\Migration;

/**
 * Class m211215_180723_user_table
 */
class m211215_180723_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211215_180723_user_table cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $this -> createTable('user', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'surname'=> $this->string(),
            'e-mail'=> $this->string()->defaultValue(null),
            'login'=> $this->string(),
            'pass'=> $this->string(),
            'isAdmin'=>$this->string()->defaultValue(0),
    ]);
    }

    public function down()
    {
       $this->dropTable('user');
    }

}
