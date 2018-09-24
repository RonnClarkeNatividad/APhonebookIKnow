<html>
<head>
    <title>A Phonebook I Know</title>
        @include('styles.generalstyles')
</head>
<body>
<h1 style="text-align:center;font-family:verdana;">A Phonebook I Know</h1>
<hr style="color:black">

<div style="width:80%; margin:0 auto;">
    
    <table style="width:100%;text-align:center">
        <tr style="background-color:black">
            <td width="30%"><h4 style="font-family:verdana;color:white">Name</h4></td>
            <td width="50%"><h4 style="font-family:verdana;color:white">Address</h4></td>
            <td width="20%"><h4 style="font-family:verdana;color:white">Contact</h4></td>
            <td width="10%"><h4 style="font-family:verdana;color:white">Operations</h4></td>
        </tr>

        <!-- loops will execute with each row of the query located-->
        @foreach($contactslist as $contact)
        <tr style="background-color:white">
            <td><h4 style="font-family:verdana;">{{$contact->name}}</h4></td>
            <td><h4 style="font-family:verdana;">{{$contact->address}}</h4></td>
            <td><h4 style="font-family:verdana;">{{$contact->contact}}</h4></td>
            <td><h4 style="font-family:verdana;"><a href="/edit/{{$contact->contact_ID}}" class="button"><i class="fa fa-edit" aria-hidden="true"></i></a> <a href="/delete/{{$contact->contact_ID}}" class="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></h4></td>
        </tr>
        @endforeach

        <tr>
            <td colspan="4"><a href="/addcontact" class="button" ><h3 style="text-align:center;font-family:verdana;">Add Contact</h3></a></td>
        </tr>
    </table>
    
</div>

</body>
</html>