<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- FullCalendar CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />

    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }
        .container {
            margin-top: 20px;
        }
        #calendar {
            margin-top: 20px;
        }
        .task-input {
            margin-top: 20px;
        }
    </style>

    <title>Calendar</title>
</head>
<body>

<div class="container">
    <h1 class="text-center">Task Calendar</h1>
    <div id="calendar"></div>
    <div class="task-input">
        <input type="text" id="taskInput" class="form-control" placeholder="Enter your task here...">
        <button id="addTask" class="btn btn-primary mt-2">Add Task</button>
    </div>
    <div id="taskList" class="mt-3"></div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize FullCalendar
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            select: function(start, end) {
                var title = prompt('Enter Task:');
                if (title) {
                    var eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true);
                }
                $('#calendar').fullCalendar('unselect');
            },
            editable: true,
            events: []
        });

        // Add task from input field
        $('#addTask').click(function() {
            var taskTitle = $('#taskInput').val();
            if (taskTitle) {
                // You can implement saving the task to the calendar here
                var eventData = {
                    title: taskTitle,
                    start: moment().format() // Current date/time for demonstration
                };
                $('#calendar').fullCalendar('renderEvent', eventData, true);
                $('#taskInput').val(''); // Clear input
            } else {
                alert('Please enter a task!');
            }
        });
    });
</script>
</body>
</html>
