<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%employee}}`.
 */
class m200318_153030_drop_city_column_from_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employee', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
