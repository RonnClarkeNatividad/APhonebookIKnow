<html>
<head>
    <title>A Phonebook I Know</title>
        @include('styles.generalstyles')
</head>
<body>
<h1 style="text-align:center;font-family:verdana;">A Phonebook I Know</h1>
<hr style="color:black">

<form action="<?php echo url('/editcontact')?>" method="post">
	<?php echo csrf_field()?>
<div style="width:30%; margin:0 auto;">
<br><br>
    <table style="width:100%;text-align:center">
            <input type="hidden" name="contact_ID" value="{{$contact->contact_ID}}">
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">First Name:</h3></td>
            <td><h3><input type="text" name="name" value="{{$contact->firstname}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Last Name:</h3></td>
            <td><h3><input type="text" name="name" value="{{$contact->lastname}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Nickname:</h3></td>
            <td><h3><input type="text" name="name" value="{{$contact->nickname}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Age:</h3></td>
            <td><h3><input type="text" name="name" value="{{$contact->age}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Address:</h3></td>
            <td><h3><input type="text" name="address" value="{{$contact->address}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Contact Number:</h3></td>
            <td><h3><input type="text" name="contact" value="{{$contact->contact}}"required></h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Hobbies:</h3></td>
            <td><h3><input type="text" name="name" value="{{$contact->hobbies}}" required></h3></td>
        </tr>
        <tr>
            <td style="text-align:center" colspan="2"><button type="submit" class="button"><h3 style="text-align:center;font-family:verdana;">Edit</h3></button>   <a href="/" class="button"><h3 style="text-align:center;font-family:verdana;">Cancel</h3></a></td>
        </tr>
    </table>
</div>

</form>

</body>
</html>