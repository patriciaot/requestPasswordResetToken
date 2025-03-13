/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Reestablecimiento de Contraseña';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-request-password-reset row">
        <div class="col"></div>
        <div class="col-md-5">
            <div class="card my-3">
                <div class="card-body">
                    <h3 class="text-center"><?= Html::encode($this->title) ?></h3>

                    <p>Por favor ingrese su Correo Electrónico y un link para el reestablecimiento de su contraseña le será enviado.</p>

                    <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                    <center>
                        <div class="form-group">
                            <?= Html::submitButton('Solicitar', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </center>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>