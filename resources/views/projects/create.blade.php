@extends('layout')

@section('mainContent')
    <h1>Create Project</h1>
    <form class="form-horizontal" method="post" action="create">
    Number of Tasks: <input type="integer" id="number_of_task" name="tasks"><br>
    Starting Date: <input type="date" id="start_date" name="startDate"><br>
    End Date: <input type="date" id="end_date" name="endDate"><br>
    Number of Workers: <input type="integer" id="number_of_workers" name="workers"><br>
    Site Area: <input type="string" id="site_area" name="siteArea"><br>

    <input type="submit" name="submit" value="Submit"> 
    
    </form>
    

@endsection