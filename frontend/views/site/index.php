<?php


/* @var $this yii\web\View */

$this->title = "Gilos internet do'koni";

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.ebayimg.com/images/g/EfYAAOSwBrRePUix/s-l1600.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ebayimg.com/images/g/FAoAAOSwp5leQRyX/s-l1600.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ebayimg.com/images/g/FCkAAOSwGj9eQoBG/s-l1600.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <div class="container-fluid">
    <div class="row  m-2">
        <div class="col-lg-9 col-xl-9 phone-index p-0 m-0">
            <div class="col-12 h3 mb-0 mt-2">
                Barcha mahsulotlar
            </div>

            <?php Pjax::begin(); ?>
            <?php
            echo ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_search',
                'options'=>[
                    'tag'=>'div',
                    'class'=>'row',
                    'id'=>'list-wrapper'
                ],
                'itemOptions'=>[
                    'class'=>'col-lg-3 col-md-4 col-sm-6 col-6'
                ],
                'layout'=>"{items}
                            <div class='container-fluid'>
                                <div class='row'>
                                    <div class='col-md-4 ml-4'>
                                    {pager}
                                    </div>
                                    <div class='ml-auto border-bottom mr-4'>
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
            echo "</div>";
         ?>
        </div>
        <div class="col-3 text-break pt-4 d-none d-sm-none d-md-none d-lg-block">
            <?php echo \frontend\widgets\sidebar\sidebar::widget(); ?>
        </div>
    </div>
    </div>

<?php $this->beginBlock('search') ?>
    <?php
        $form = ActiveForm::begin(['id'=>'search-form', 'method'=>'get',  'fieldConfig'=>['options'=>['tag'=>false]]]);
            echo Html::beginTag('div', ['class'=>'input-group', 'style'=>'width: 300px;']);
                echo $form->field($searchModel, 'name')->textInput(['class'=>'form-control pull-right', 'placeholder'=>'Mahsulotlarni qidirish...'])->label(false);
                echo "
                    <button class='btn pl-2  text-white' type='submit'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                            <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'/>
                        </svg>
                    </button>
                ";
            echo Html::endTag('div');
        $form->end();
    ?>
<?php $this->endBlock(); ?>