<?php
/* @var $this CmsCommentController */
/* @var $model CmsComment */

$this->breadcrumbs=array(
	'Cms Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CmsComment', 'url'=>array('index')),
	array('label'=>'Create CmsComment', 'url'=>array('create')),
	array('label'=>'Update CmsComment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CmsComment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CmsComment', 'url'=>array('admin')),
);
?>

<h1>View CmsComment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'page_id',
		'comment',
		'date_entered',
	),
)); ?>
