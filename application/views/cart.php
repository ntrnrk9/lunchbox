<html>
<head>
	<title>cart</title>
</head>
<body>

    <h3>Cart Information</h3>
   <?php echo anchor('product',"<< Continue Shopping"); ?>
    <br></br>


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
	  <td><?php echo  $items['qty'] ?></td>
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



</body>
</html>