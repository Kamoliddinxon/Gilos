<?php

use yii\db\Migration;

/**
 * Class m220327_071712_create_table_product
 */
class m220327_071712_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('phone', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'price'=>$this->string()->notNull(),
            'text'=>$this->text()
        ]);

        $this->createTable('notebook', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'price'=>$this->string()->notNull(),
            'text'=>$this->text()
        ]);

        $this->createTable('televizor', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'price'=>$this->string()->notNull(),
            'text'=>$this->text()
        ]);

        $this->createTable('auto', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'price'=>$this->string()->notNull(),
            'text'=>$this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220327_071712_create_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220327_071712_create_table_product cannot be reverted.\n";

        return false;
    }
    */
}
