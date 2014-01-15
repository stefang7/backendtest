<?php
/* @var $this CmsCommentController */
/* @var $model CmsComment */

$this->breadcrumbs=array(
	'Cms Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CmsComment', 'url'=>array('index')),
	array('label'=>'Create CmsComment', 'url'=>array('create')),
	array('label'=>'View CmsComment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CmsComment', 'url'=>array('admin')),
);
?>

<h1>Update CmsComment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>