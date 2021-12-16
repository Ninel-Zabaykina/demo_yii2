<?php

use yii\db\Migration;

/**
 * Class m211215_180752_categories_table
 */
class m211215_180752_categories_table extends Migration
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
        echo "m211215_180752_categories_table cannot be reverted.\n";

        return false;
    }


    public function up()
    {
        $this -> createTable('categories', [
            'id' => $this->primaryKey(),
            'title'=> $this->string()
    ]);
    }

    public function down()
    {
        echo "m211215_180752_categories_table cannot be reverted.\n";

        return false;
    }

}
