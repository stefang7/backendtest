<?php
/* @var $this CmsUserController */
/* @var $model CmsUser */

$this->breadcrumbs=array(
	'Cms Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsUser', 'url'=>array('index')),
	array('label'=>'Manage CmsUser', 'url'=>array('admin')),
);
?>

<h1>Create CmsUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>