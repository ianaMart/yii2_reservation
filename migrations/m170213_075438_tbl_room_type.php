<?php

use yii\db\Migration;

class m170213_075438_tbl_room_type extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_room_type}}', [
            'type_id' => $this->primaryKey(),
            'type_name' => $this->string(50)->notNull(),
            'type_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'type_desc' => $this->text(),
            'type_created_at' => $this->date(),
            'type_updated_at' => $this->date(),
            'userid' => $this->integer(11)->notNull(),
            
        ], $tableOptions);        
    }

    public function down()
    {
        $this->dropTable('{{%tbl_reservation_room}}');
    }
}
