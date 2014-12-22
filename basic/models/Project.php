<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $project_detials
 *
 * @property ProjectUsers[] $projectUsers
 * @property Task[] $tasks
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'project_detials'], 'required'],
            [['project_detials'], 'string'],
            [['project_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'project_detials' => 'Project Detials',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectUsers()
    {
        return $this->hasMany(ProjectUsers::className(), ['p_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['project_id' => 'id']);
    }
}
