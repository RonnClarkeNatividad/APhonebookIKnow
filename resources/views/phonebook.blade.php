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
            <tr>

                <form action="<?php echo url('/searchcontact')?>" method="post">
                    <?php echo csrf_field()?>
                
                <td colspan="4" style="text-align:center"><input type="text" name="search" placeholder="Search" style="width:300px;height:30px;">  <button class="buttontiny" type="submit"><i class="fa fa-search"></i></button></td>
                
                </form>
            </tr>
            <tr style="background-color:black">
                <td width="30%"><h3 style="font-family:verdana;color:white">Name</h3></td>
                <td width="50%"><h3 style="font-family:verdana;color:white">Address</h3></td>
                <td width="20%"><h3 style="font-family:verdana;color:white">Contact</h3></td>
                <td width="10%"><h3 style="font-family:verdana;color:white">Operations</h3></td>
            </tr>

            <!-- tests if the contact list is null-->
        @if($contactslist == null)
            <tr style="background-color:white">
                <td colspan="4"> <h4 style="font-family:verdana;text-align:center">No contacts found</h4></td>
            </tr>
        @else()
            <!-- loops will execute with each row of the query located-->
            @foreach($contactslist as $contact)
            <tr style="background-color:white">
                <td><h4 style="font-family:verdana;"><a href="/viewprofile/{{$contact->contact_ID}}">{{$contact->firstname}} {{$contact->lastname}}</a></h4></td>
                <td><h4 style="font-family:verdana;">{{$contact->address}}</h4></td>
                <td><h4 style="font-family:verdana;">{{$contact->contact}}</h4></td>
                <td><h4 style="font-family:verdana;"><a href="/edit/{{$contact->contact_ID}}" class="button"><i class="fa fa-edit" aria-hidden="true"></i></a> <a href="/delete/{{$contact->contact_ID}}" class="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></h4></td>
            </tr>
            @endforeach
        @endif()
        <tr>
            <td colspan="4"><br><a href="/addcontact" class="button" ><h3 style="text-align:center;font-family:verdana;">Add Contact</h3></a></td>
        </tr>
    </table>
    
</div>

</body>
</html>