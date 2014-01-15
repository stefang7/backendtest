<?php
/* @var $this CmsFileController */
/* @var $model CmsFile */

$this->breadcrumbs=array(
	'Cms Files'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsFile', 'url'=>array('index')),
	array('label'=>'Create CmsFile', 'url'=>array('create')),
	array('label'=>'View CmsFile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsFile', 'url'=>array('admin')),
);
?>

<h1>Update CmsFile <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>