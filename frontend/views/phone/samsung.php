<?php
/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

echo "<div class='container-fluid'>";
echo "<div class='row m-1'>";
echo "<div class='ml-auto btn btn-outline-warning mt-5'>";
echo $dataProvider->sort->link('name');
echo "</div>";
echo "</div>";
echo "</div>";

echo \yii\widgets\ListView::widget([

    'dataProvider' => $dataProvider,
    'itemView' => 'samsungi',
    'options'=>[
        'tag'=>'div',
        'class'=>'row',
        'id'=>'list-wrapper'
    ],
    'itemOptions'=>[
        'class'=>'col-lg-3 col-md-4 col-sm-6 col-6'
    ],

    'layout'=>"<div class='row m-2'>{items}</div>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-md-4 ml-4'>
        {pager}
        </div>
        <div class='ml-auto border-bottom m-4'>
        {summary}
        </div>
    </div>
</div>
",

    'summary'=>'<i class="mr-4">Jami <strong>{totalCount}</strong> ta dan <strong>{count}</strong> ta chiqyabti</i>',
    'pager' => [
        'nextPageLabel' => 'keyingi',
        'prevPageLabel' => 'oldingi',
        'maxButtonCount' => 4,
    ],
]);
?>