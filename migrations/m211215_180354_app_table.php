<?php

use yii\db\Migration;

/**
 * Class m211215_180354_app_table
 */
class m211215_180354_app_table extends Migration
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
        echo "m211215_180354_app_table cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $this -> createTable('request', [
            'id' => $this->primaryKey(),
            'title'=> $this->string(),
            'body'=> $this->text(),
            'date'=> $this->dateTime(),
            'category_id'=> $this->integer(),
            'user_id'=> $this->integer(),
            'status'=> $this->integer(),
            'photo'=> $this->string(),
    ]);

    }

    public function down()
    {
        $this->dropTable('request');
    }

}
