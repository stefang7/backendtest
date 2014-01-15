<?php
/* @var $this CmsPageController */
/* @var $model CmsPage */

$this->breadcrumbs=array(
	'Cms Pages'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsPage', 'url'=>array('index')),
	array('label'=>'Create CmsPage', 'url'=>array('create')),
	array('label'=>'View CmsPage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsPage', 'url'=>array('admin')),
);
?>

<h1>Update CmsPage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>