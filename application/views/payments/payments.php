<div class="container" style="" >
<div class="payments-page">
<h1>Payment</h1>
<p>Pay <strong>Ksh 200</strong> and get info on the agent contact who has the document</p>
<div class="col-md-6" style="text-align: left;">
  <h2>Payment process</h2>
  <p>1. Go to your M-PESA menu</p>
  <p>2. Select LIPA NA M-PESA</p> 
  <p>3. Select Buy Goods and Sevices</p>
  <p>4. Enter Till Number <strong> 123456</strong></p>
  <p>5. Enter Amount, in this case <strong>Kshs 200</strong></p>
  <p>6. Enter your Pin</p>
  <p>7. Submit</p>
 <p>8. You will receive a confirmation message </p>
 <p>9.Company Name <strong>WEBCLOUD KENYA LIMITED</strong></p>

</div>
<div class="col-md-6">
<?php
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="requestcheckout">
  Amount:<br>
  <input type="text" name="amount" value="200">
  <br>
  Phonenumber:<br>
  <input type="text" name="number" placeholder="2547111111111">
  <br>
  Pay via MPESA:<br>
  <button type="submit" name="checkout" ><img src="m.jpg"></button>
</form>

<p>NB: Since this sample uses a real paybill number it makes real transactions. Hence encouraged to test with the lowest amount 10/=</p>


</body>
</html>

</div>
</div>
</div>