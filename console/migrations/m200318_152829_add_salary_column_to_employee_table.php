<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%employee}}`.
 */
class m200318_152829_add_salary_column_to_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%employee}}','salary', 'varchar(11)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
