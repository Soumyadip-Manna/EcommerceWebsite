<h3 class="text-success text-center">All Payments</h3>


<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <?php
            $get_payments = "Select * from `user_payments`";
            $result = mysqli_query($con,$get_payments);
            $row_count=mysqli_num_rows($result);
           
    if($row_count==0) {
        echo"<h2 class='text-danger text-center mt-5'>No Payments Yet</h2>";
        
    }
    else {
        echo "<tr class='text-center'>
        <th>Sl NO</th>
         <th>Invoice No</th>
        <th>Amount</th>
        <th>Payment Mode</th>
        <th>Order Date</th>
        <th>delete</th>
    </tr>
</thead>
<tbody>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $order_id=$row_data['order_id'];
            $payment_id=$row_data['payment_id'];
            $amount=$row_data['amount'];
            $invoice_number=$row_data['invoice_number'];
            $payment_mode=$row_data['payment_mode'];
            $date=$row_data['date'];
            $number++;

            echo "<tr class='text-center'>
            <td>$number</td>
            <td>$invoice_number</td>
            <td>$amount</td>
            <td>$payment_mode</td>
            <td>$date</td>
            <td><a href=''><i class='fa-solid fa-trash'></i></a></td>
        </tr>";
        }
    }
        ?>
        
        
    </tbody>
</table>