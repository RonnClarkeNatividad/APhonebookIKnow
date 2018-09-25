<html>
<head>
    <title>A Phonebook I Know</title>
        @include('styles.generalstyles')
</head>
<body>
<h1 style="text-align:center;font-family:verdana;"> <i class="fa fa-phone"></i> A Phonebook I Know <i class="fa fa-phone"></i></h1>
<hr style="color:black">

<div style="width:30%; margin:0 auto;">
<br><br>
    <table style="width:100%;text-align:center">
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;"> Name:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->firstname}} {{$credentials->lastname}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Nickname:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->nickname}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Age:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->age}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Address:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->address}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Contact Number:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->contact}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:left"><h3 style="font-family:verdana;">Hobbies:</h3></td>
            <td><h3 style="font-family:verdana;">{{$credentials->hobbies}}</h3></td>
        </tr>
        <tr>
            <td style="text-align:center" colspan="2"><a href="/edit/{{$credentials->contact_ID}}" class="button"><h3 style="text-align:center;font-family:verdana;">Edit</h3></a>   <a href="/" class="button"><h3 style="text-align:center;font-family:verdana;">Back</h3></a></td>
        </tr>
    </table>
</div>

</body>
</html>