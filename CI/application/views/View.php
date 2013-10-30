
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Opt</td>
</tr>
<?php
/*
 * Created on 2013-9-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 foreach($models as $model)
 {
 	?>
 	<tr>
 <td>
  <?php echo $model['id']; ?>
  </td>
  </br>
  <td>
  <?php echo $model['name'];?>
  </td>

  <td>
  <?php $this->load->helper('url');
   echo site_url(array('model','detail','1'))?>
	<div id='view_detail'>

 <?php
 	echo anchor('model/detail/1', 'My News', 'title="News title"');
 ?>

	</div>
  </td>
  </tr>

  <?php
  }?>
</table>
