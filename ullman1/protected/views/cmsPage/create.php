<?php
/* @var $this CmsPageController */
/* @var $model CmsPage */

$this->breadcrumbs=array(
	'Cms Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsPage', 'url'=>array('index')),
	array('label'=>'Manage CmsPage', 'url'=>array('admin')),
);
?>

<h1>Create CmsPage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>