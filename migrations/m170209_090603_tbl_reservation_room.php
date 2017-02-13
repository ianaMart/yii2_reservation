<?php

use yii\db\Migration;

class m170209_090603_tbl_room extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_room}}', [
            'room_id' => $this->primaryKey(),
            'room_category_id' => $this->integer(11)->notNull(),
            'room_name' => $this->string(50)->notNull(),
            'room_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'room_desc' => $this->text(),
            'room_created_at' => $this->date(),
            'room_updated_at' => $this->date(),
            'userid' => $this->integer(11)->notNull(),
            
        ], $tableOptions);        
    }

    public function down()
    {
        $this->dropTable('{{%tbl_room}}');
    }
}
