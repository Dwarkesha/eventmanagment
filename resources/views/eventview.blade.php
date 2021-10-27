<!DOCTYPE html>
<html>
<body>

<h2>Event View Page</h2>


  <label for="fname">Event Name:</label>{{$eventData->event_title}}</br></br>
  
  <label for="lname">Event Ocurrences:</label><br>

  <table>
  <tr>
    <th>Date</th>
    <th>Day Name</th>
  </tr>
 
  <tr>
    <td>{{$eventData->start_date}}</td>
    <td>{{\Carbon\Carbon::parse($eventData->start_date)->format('D');}}</td>
  </tr>
 
</table>
  
</form> 
</body>
</html>