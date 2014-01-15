<?php
/* @var $this CmsFileController */
/* @var $model CmsFile */

$this->breadcrumbs=array(
	'Cms Files'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsFile', 'url'=>array('index')),
	array('label'=>'Manage CmsFile', 'url'=>array('admin')),
);
?>

<h1>Create CmsFile</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>