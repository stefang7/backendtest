<?php
/* @var $this CmsUserController */
/* @var $model CmsUser */

$this->breadcrumbs=array(
	'Cms Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CmsUser', 'url'=>array('index')),
	array('label'=>'Create CmsUser', 'url'=>array('create')),
	array('label'=>'Update CmsUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CmsUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsUser', 'url'=>array('admin')),
);
?>

<h1>View CmsUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'pass',
		'type',
		'date_entered',
	),
)); ?>
