<?php
/* @var $this CmsFileController */
/* @var $model CmsFile */

$this->breadcrumbs=array(
	'Cms Files'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CmsFile', 'url'=>array('index')),
	array('label'=>'Create CmsFile', 'url'=>array('create')),
	array('label'=>'Update CmsFile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CmsFile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsFile', 'url'=>array('admin')),
);
?>

<h1>View CmsFile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'name',
		'type',
		'size',
		'description',
		'date_entered',
		'date_updated',
	),
)); ?>
