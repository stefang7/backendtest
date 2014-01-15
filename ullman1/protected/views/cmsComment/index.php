<?php
/* @var $this CmsCommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Comments',
);

$this->menu=array(
	array('label'=>'Create CmsComment', 'url'=>array('create')),
	array('label'=>'Manage CmsComment', 'url'=>array('admin')),
);
?>

<h1>Cms Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
