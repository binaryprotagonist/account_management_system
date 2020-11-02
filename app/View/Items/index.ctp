<div class="items form">
<h1 class="text-center head_item">Items</h1>
<div class="container"></div>
<table class="table table-striped table-hover">
    <thead class="thead-dark">
		<tr>
			<th>S.No</th>
			<th><?php echo $this->Paginator->sort('company_name', 'Company Name ');?>  </th>
			<th><?php echo $this->Paginator->sort('postal_code', 'Postal Code');?></th>
			<th>Created</th>
			<th>Last Update</th>
			<th>Subscription Plan</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>	
			
		<?php $count=0; ?>
		<?php foreach($items as $item): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $count; ?></td>
			<td><?php echo $item['Item']['company_name']; ?></td>
			<td><?php echo $item['Item']['postal_code']; ?></td>
			<td><?php echo $this->Time->niceShort($item['Item']['created']); ?></td>
			<td><?php echo $this->Time->niceShort($item['Item']['modified']); ?></td>
			<td><?php echo $item['Item']['subscription_plan']; ?></td>
			<td >
			<?php echo $this->Html->link("",   array('action'=>'edit', $item['Item']['id']), array("class"=>"fa fa-edit c-custom") ); ?> 
			<a href="#" class="fa fa-trash c-custom" onclick="delete_item(<?php echo $item['Item']['id']; ?>)"></a>
			<?php /* echo $this->Html->link("", array('action'=>'delete', $item['Item']['id']),array("class"=>"fa fa-trash c-custom") ); */ ?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($item); ?>
	</tbody>
</table>

</div>				
<script>
	function delete_item(id){
		swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this account!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! The account has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your account is safe!");
  }
  window.location.href="/account_managment_system/items/delete/"+id;
});
	}
</script>