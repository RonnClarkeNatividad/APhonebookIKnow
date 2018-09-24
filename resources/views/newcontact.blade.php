<html>
<head>
    <title>A Phonebook I Know</title>
        @include('styles.generalstyles')
</head>
<body>
<h1 style="text-align:center;font-family:verdana;">A Phonebook I Know</h1>
<hr style="color:black">

<form action="<?php echo url('/savecontact')?>" method="post">
	<?php echo csrf_field()?>
<div style="width:50%; margin:0 auto;">
<br><br>
    <table style="width:100%;text-align:center">
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Name:</h3></td>
            <td><h3><input type="text" name="name" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Address:</h3></td>
            <td><h3><input type="text" name="address" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Contact Number:</h3></td>
            <td><h3><input type="text" name="contact" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:center" colspan="2"><button type="submit" class="button"><h3 style="text-align:center;font-family:verdana;">Save</h3></button></td>
        </tr>
    </table>
</div>

</form>

</body>
</html>