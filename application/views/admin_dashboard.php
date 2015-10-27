<?php if(!$this->session->userdata('admin'))
	{
		redirect('/');
	} ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title></title>

</head>	
<body>
    <div id='header'>
        <h2>Dashboard</h2>
        <a href='/admins/orders'>Orders</a>
        <a href='/admins/products'>Products</a>
        <a href='/admins/logoff'>Log Off</a>
    </div>
    <ul>
    <?php var_dump($this->session->userdata);

    foreach($products as $product)
    { ?>
        <li>
            <p>Name: <?=$product['name']?></p>
            <p>Description: <?=$product['description']?></p>
            <p>Price: $<?=$product['price']?></p>
        </li>
    <?php } ?>
    </ul>

    <table>
        <thead>
            <th>Order ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Billing Address</th>
            <th>Total</th>
            <th>Status</th>
        </thead>
        <tbody>
            <tr>
            <?php /* foreach ($orders as $order) {
                echo "<td>" . $order['id'] . "</td>";
                echo "<td>" . $order['name'] . "</td>";
                echo "<td>" . $order['date'] . "</td>";
                echo "<td>" . $order['billing_address'] . "</td>";
                echo "<td>" . $order['total'] . "</td>";
                echo "<td>" . $order['status'] . "</td>";
            } */ ?> 
    <form action='/products/add' method='post'>
    	Name: <input type='text' name='name'>
    	Description: <textarea name='description'></textarea>
    	Price: <input type='text' name='price'>
    	<input type='submit' value='Add Product'>
    </form>

</body>
</html>
