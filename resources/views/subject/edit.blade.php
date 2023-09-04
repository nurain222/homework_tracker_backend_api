<h1> Update the subject </h1>

<form method="POST" action="{{route('subject.update',$subject->id)}}">
    @csrf
    @method('PUT')
    <input type="text" name="sub_name" cols="30" value={{$subject->sub_name}} required><br><br>
    <textarea name="sub_details" rows="4" cols="30" required>{{$subject->sub_details}} </textarea><br><br>
    <select name="sub_status" value={{$subject->sub_status}}  required> 
        <option value="Unfinished">Unfinished</option>
        <option value="In Progress">In Progress</option>
        <option value="Done">Done</option>
    </select><br><br>
    
    <input type="submit" value="Submit">
</form>