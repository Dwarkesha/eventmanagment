<!DOCTYPE html>
<html>
<body>

<h2>ADD Event Page</h2>

<form action="storeevent" method="post">
@csrf
  <label for="fname">Event Title:</label><br>
  <input type="text" id="title" name="title" value="" required><br>
  <label for="lname">Start Date:</label><br>
  <input type="date" id="lname" name="sdate" value="" required><br>
  <label for="lname">End Date:</label><br>
  <input type="date" id="lname" name="edate" value="" required><br>
  <label for="lname">Recurrence:</label><br>
    <select name="msection" id="cars" required>
        <option value="Every">Every</option>
        <option value="Every Other">Every Other</option>
        <option value="Every Third">Every Third</option>
        <option value="Every fourth">Every fourth</option>
    </select>

    <select name="dsection" id="cars" required>
        <option value="Day">Day</option>
        <option value="Week">Week</option>
        <option value="Month">Month</option>
        <option value="Year">Year</option>
    </select></br></br>

  <input type="submit" value="Submit">
</form> 
</body>
</html>