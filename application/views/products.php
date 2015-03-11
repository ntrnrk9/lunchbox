<html>
<head>
	<title>products</title>
</head>
<body>
    <div id="home"><a href="<?php echo base_url()."index.php/main/members";?>"><img src="<?php echo base_url();?>style/images/home.jpg" style="float: right"> </a></div>
<div style="float:left">
<?php
$this->load->library('table');
$this->table->set_heading('code','name','category','type','price','Order');
foreach($product_list as $p)
    $this->table->add_row($p->product_code,$p->product_name,$p->product_category,$p->product_type,$p->price,anchor('product/buy/'.$p->product_code,'Order Now'));
$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

$this->table->set_template($tmpl); 
echo $this->table->generate();

?>
    </div>
    
    <div><h1>for cart summary</h1>
        
    
<?php echo form_open('product/update'); ?>
<table cellpadding="6" cellspacing="1" border="1">

<tr>
  <th>QTY</th>
  <th>Item Description</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
  <th style="text-align:right">Option</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">&#8377;<?php echo $items['subtotal']; ?></td>
          <td style="text-align:center"><?php echo anchor('product/delete/'.$items['rowid'],'X');?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">&#8377;<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('', 'Update your Cart'); ?></p>
<?php form_close(); ?>
<a href="<?php echo base_url().'index.php/product/checkout';?>">PACK MY BOX</a>
       
 </div>
</body>
</html>
