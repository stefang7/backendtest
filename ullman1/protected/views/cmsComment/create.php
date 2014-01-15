<?php
/* @var $this CmsCommentController */
/* @var $model CmsComment */

$this->breadcrumbs=array(
	'Cms Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CmsComment', 'url'=>array('index')),
	array('label'=>'Manage CmsComment', 'url'=>array('admin')),
);
?>

<h1>Create CmsComment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>