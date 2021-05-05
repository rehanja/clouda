

<table>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Avatar</th>
  </tr>
  @foreach($data as $item)
  <tr>
 
<th>{{$item['id']}}</th>
<th>{{$item['email']}}</th>
<th>{{$item['first_name']}}</th>
<th>{{$item['last_name']}}</th>
<th>{{$item['avatar']}}</th>
</tr>
  @endforeach
</table>