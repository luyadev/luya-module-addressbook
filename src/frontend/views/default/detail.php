<?php
use luya\helpers\Url;
use yii\widgets\DetailView;

?>
<div>
    <a href="<?= Url::toRoute(['/addressbook']); ?>">< Back</a>
</div>
<br/>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'salutation',
        'firstname',
        'lastname',
        'street',
        'zip',
        'city',
        'country',
        'email',
        'notes:html',
    ],
]);
