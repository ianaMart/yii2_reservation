<?php

use yii\db\Migration;

class m170213_081448_tbl_reservation extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_reservation}}', [
            'res_id' => $this->primaryKey(),
            'res_status' => $this->smallInteger()->notNull()->defaultValue(0),
            'res_created_at' => $this->date(),
            'res_updated_at' => $this->date(),
            'member_id' => $this->integer(11)->notNull(),
            
        ], $tableOptions);        
    }

    public function down()
    {
        $this->dropTable('{{%tbl_reservation}}');
    }
}
