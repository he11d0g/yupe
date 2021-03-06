<?php
    $this->breadcrumbs = array(
        Yii::app()->getModule('image')->getCategory() => array(),
        Yii::t('ImageModule.image', 'Images') => array('/image/default/index'),
        $model->name => array('/image/default/view', 'id' => $model->id),
        Yii::t('ImageModule.image', 'Edit'),
    );

    $this->pageTitle = Yii::t('ImageModule.image', 'Images - edit');

    $this->menu = array(
        array('icon' => 'list-alt', 'label' => Yii::t('ImageModule.image', 'Image management'), 'url' => array('/image/default/index')),
        array('icon' => 'plus-sign', 'label' => Yii::t('ImageModule.image', 'Add image'), 'url' => array('/image/default/create')),
        array('label' => Yii::t('ImageModule.image', 'Image') . ' «' . mb_substr($model->name, 0, 32) . '»'),
        array('icon' => 'pencil', 'label' => Yii::t('ImageModule.image', 'Edit image'), 'url' => array(
            '/image/default/update',
            'id' => $model->id
        )),
        array('icon' => 'eye-open', 'label' => Yii::t('ImageModule.image', 'View image'), 'url' => array(
            '/image/default/view',
            'id' => $model->id
        )),
        array('icon' => 'trash', 'label' => Yii::t('ImageModule.image', 'Remove image'),'url' => '#', 'linkOptions' => array(
            'submit'  => array('/image/default/delete', 'id' => $model->id),
            'params' => array(Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken),
            'confirm' => Yii::t('ImageModule.image', 'Do you really want to remove image?'),
            'csrf' => true,
        )),
    );
?>
<div class="page-header">
    <h1><?php echo Yii::t('ImageModule.image', 'Change image'); ?><br />
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
