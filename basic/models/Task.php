<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $task_id
 * @property string $task_name
 * @property string $task_start
 * @property string $task_end
 * @property string $task_period
 * @property integer $project_id
 * @property integer $user_id
 *
 * @property User $user
 * @property Project $project
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_name', 'project_id', 'user_id'], 'required'],
            [['task_start', 'task_end', 'task_period'], 'safe'],
            [['task_start', 'task_end'], 'default', 'value' => '2014-12-01'],
            [['task_period'], 'default', 'value' => '09:00:00'],
            [['project_id', 'user_id'], 'integer'],
            [['task_name'], 'string', 'max' => 100],
            [['task_color'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'task_name' => 'Task Name',
            'task_start' => 'Task Start',
            'task_end' => 'Task End',
            'task_period' => 'Task Period',
            'project_id' => 'Project Name',
            'user_id' => 'Username',
            'task_color' => 'Task Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
}
