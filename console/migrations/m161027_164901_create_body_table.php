<?php

use yii\db\Migration;

/**
 * Handles the creation of table `body`.
 */
class m161027_164901_create_body_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%body_type}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%brand}}', [
            'id' =>$this->primaryKey(),
            'name' =>$this->string()->notNull(),
            'slug' =>$this->string()->notNull(),
            'logo' =>$this->string()->notNull(),

            ],$tableOptions);

        $this->createTable('{{%model}}', [
            'id' =>$this->primaryKey(),
            'name' =>$this->string()->notNull(),
            'slug' =>$this->string()->notNull(),
            'photos' =>$this->string()->notNull(),
            'description' =>$this->string()->notNull(),
            'logo_id' =>$this->integer()->notNull(),
            'body_type_id' =>$this->integer()->notNull(),

            ],$tableOptions);

         $this->createTable('{{%purchase_application}}', [
            'id' =>$this->primaryKey(),
            'name' =>$this->string()->notNull(),
            'phone' =>$this->string()->notNull(),
            'brand_id' =>$this->integer()->notNull(),
            'model_id' =>$this->integer()->notNull(),


            ],$tableOptions);
         $this->createIndex('logo','{{%model}}','logo_id');
         $this->createIndex('body','{{%model}}','body_type_id');
         $this->createIndex('brand','{{%purchase_application}}','brand_id');
         $this->createIndex('model','{{%model}}','logo_id');
         $this->addForeignKey('logo','{{%model}}','logo_id','{{brand}}','id');
         $this->addForeignKey('body','{{%model}}','body_type_id','{{body_type}}','id');
         $this->addForeignKey('brand','{{%purchase_application}}','brand_id','{{brand}}','id');
         $this->addForeignKey('model','{{%model}}','logo_id','{{model}}','id');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%body_type}}');
        $this->dropTable('{{%body_type}}');
        $this->dropTable('{{%model}}');
        $this->dropTable('{{%purchase_application}}');
    }
}
