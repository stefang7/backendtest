<?php
/* @var $this CmsUserController */
/* @var $model CmsUser */

$this->breadcrumbs=array(
	'Cms Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsUser', 'url'=>array('index')),
	array('label'=>'Create CmsUser', 'url'=>array('create')),
	array('label'=>'View CmsUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsUser', 'url'=>array('admin')),
);
?>

<h1>Update CmsUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>