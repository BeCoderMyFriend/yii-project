<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Task;

/**
 * TaskSearch represents the model behind the search form about `app\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'project_id', 'user_id'], 'integer'],
            [['task_name', 'task_start', 'task_end', 'task_period'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Task::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'task_id' => $this->task_id,
            'task_start' => $this->task_start,
            'task_end' => $this->task_end,
            'task_period' => $this->task_period,
            'project_id' => $this->project_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'task_name', $this->task_name]);

        return $dataProvider;
    }
}
