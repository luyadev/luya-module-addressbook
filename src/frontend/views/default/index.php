<? for ($i = 0; $i < count($groups); $i++): ?>
    <h3><?= $groups[$i]->name ?></h3>
    <?= \yii\grid\GridView::widget([
        'dataProvider' => $providers[$i],
        'columns' => [
            [
                'attribute' => 'firstname',
                'contentOptions' => ['style' => 'width:404px'],
                'enableSorting' => false,
                'headerOptions' => ['style' => 'background-color:#e9e9e9'],
            ],
            [
                'attribute' => 'lastname',
                'contentOptions' => ['style' => 'width:395px'],
                'enableSorting' => false,
                'headerOptions' => ['style' => 'background-color:#e9e9e9'],
            ],
            [
                'attribute' => 'country',
                'enableSorting' => false,
                'headerOptions' => ['style' => 'background-color:#e9e9e9'],
            ],
        ],
        'rowOptions' => function ($model, $key, $index, $grid) {
            $route = \luya\helpers\Url::toRoute(['/addressbook/default/detail', 'id' => $key]);
            return [
                'id' => $model['id'],
                'style' => 'cursor:pointer;background-color:#fff',
                'onclick' => 'location.href="' . $route . '";',
                'onmouseover' => '$(this).css("background-color","rgb(211, 236, 255)");',
                'onmouseout' => '$("tbody > tr").css("background-color","#fff");',
            ];
        },
        'tableOptions' => ['class' => 'table table-bordered']
    ]); ?>
<? endfor; ?>