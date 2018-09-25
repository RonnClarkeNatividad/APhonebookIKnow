<html>
<head>
    <title>A Phonebook I Know</title>
        @include('styles.generalstyles')
</head>
<body>
<h1 style="text-align:center;font-family:verdana;"> <i class="fa fa-phone"></i> A Phonebook I Know <i class="fa fa-phone"></i></h1>
<hr style="color:black">

<form action="<?php echo url('/savecontact')?>" method="post">
	<?php echo csrf_field()?>
<div style="width:30%; margin:0 auto;">
<br><br>
    <table style="width:100%;text-align:center">
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">First Name:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="firstname" required><b style="color:red"> *</b></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Last Name:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="lastname" required><b style="color:red"> *</b></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Nickname:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="nickname"></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Age:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="age"></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Address:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="address"><b style="color:red"> *</b></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Contact Number:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="contact" required><b style="color:red"> *</b></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Hobbies:</h3></td>
            <td style="text-align:left"><h3><input type="text" name="hobbies" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left" colspan="2"><h6 style="font-family:verdana;">Fields marked with <b style="color:red"> *</b> must be filled in.</h6></td>
        </tr>
        <tr>
            <td style="text-align:center" colspan="2"><button type="submit" class="button"><h3 style="text-align:center;font-family:verdana;">Save</h3></button>   <a href="/" class="button"><h3 style="text-align:center;font-family:verdana;">Back</h3></a></td>
        </tr>
    </table>
</div>

</form>

</body>
</html>