<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/promotions.css" />
<?php
$this->breadcrumbs=array(
	'Attendances',
);

?>
<?php $batch=Batches::model()->findByAttributes(array('id'=>$_REQUEST['id'])); ?>
  <div style="background:#fff; min-height:800px;">        

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    
    <td valign="top">
	<?php if($batch!=NULL)
		   {
			   ?>
    <div style="padding:20px;">
       
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
     <?php $this->renderPartial('/batches/tab');?>
    
    <div class="clear"></div>
    
    

<div class="formConInner" style="top: 15px; padding:0">
   <div class="promo_bx">
                	
		<div class="promo_txtbx">
			<h1>Community Edition is feature-limited.</h1>
			<p>Buy our premium version to get this feature and manage your institution more efficiently.</p>
			<a href="http://tryopenschool.com" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/try_bttn.png" width="75" height="38" /></a>
		</div> 
	<div class="o-s_logo" style="width:200px;"> <a href="https://open-school.org" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/o-s_promo_logo.png" width="232" height="92" /></a> </div>   
	</div>
                
	<div class="fourth_ad"><a href="https://open-school.org/pricing" target="_blank"><img src="http://tryopenschool.com/images/o-s_new_ad_img.png" width="960" /></a></div>
 

<?php  }?>
</br></br>
</div>
</div>
 
 	</div></div></div></div>
    </td>
  </tr>
</table>
</div>