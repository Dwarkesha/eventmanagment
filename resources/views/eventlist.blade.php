<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Event List Page</h2>

<a href="{{url('addevent')}}"><button class="button button2">Add Event</button></a></br></br>

<table>
  <tr>
    <th>Title</th>
    <th>Dates</th>
    <th>Ocurrence</th>
    <th>Actions</th>
  </tr>
  @foreach($eventData as $eventList)
  <tr>
    <td>{{$eventList->event_title}}</td>
    <td>{{$eventList->start_date}} to {{$eventList->end_date}}</td>
    <td>{{$eventList->recurrence_1}} {{$eventList->recurrence_2}}</td>
    <td>
        <a href="{{url('eventview',['id'=> $eventList->id])}}"><button class="button button2">View</button></a></br></br>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>