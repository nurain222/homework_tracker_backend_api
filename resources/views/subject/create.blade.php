<h1> Insert new subject </h1>

<form method="POST" action="{{route('subject.store')}}">
    @csrf
    <input type="text" name="sub_name" cols="30" placeholder="Enter title" required><br><br>
    <textarea name="sub_details" rows="4" cols="30" placeholder="Enter details" required></textarea><br><br>
    <select name="sub_status" placeholder="Enter status" required> 
        <option value="Unfinished">Unfinished</option>
        <option value="In Progress">In Progress</option>
        <option value="Done">Done</option>
    </select><br><br>
    
    <input type="submit" value="Submit">
</form>