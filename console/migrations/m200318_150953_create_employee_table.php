<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m200318_150953_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(),
            'lastName' => $this->string(),
            'middleName' => $this->string(),
            'birtday' => $this->dateTime(),
            'city' => $this->string(),
            'dateStartWork' => $this->dateTime(),
            'experience' =>$this->integer(2),
            'position' => $this->string(),
            'departmentNum' => $this->integer(2),
            'idCode' => $this->integer(11),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employee}}');
    }
}
