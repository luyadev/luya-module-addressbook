<?php
namespace luya\addressbook\frontend\controllers;

use luya\addressbook\models\Contact;
use luya\addressbook\models\Group;
use luya\web\Controller;
use yii\data\ActiveDataProvider;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $groups = Group::find()->all();
        $providers = [];
        foreach ($groups as $group) {
            $providers[] = new ActiveDataProvider([
                'query' => Contact::find()->where(['group_id' => $group->id]),
                'pagination' => [
                    'pageSize' => 20,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'group_id' => SORT_ASC,
                        'lastname' => SORT_ASC,
                    ]
                ],
            ]);
        }

        return $this->render('index', [
            'providers' => $providers,
            'groups' => $groups
        ]);
    }

    public function actionDetail($id = null)
    {
        $model = Contact::findOne($id);

        if (!$model) {
            return $this->goHome();
        }

        return $this->render('detail', [
            'model' => $model
        ]);
    }
}