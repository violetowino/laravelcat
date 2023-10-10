
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@600&family=Poppins&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

        <style>
            .h-font{
                font-family: 'Merienda', cursive;
            }
        </style>
    </head>
    <body>
        <div class="page-content">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h-font text-center text-primary p-3">Clients Bookings</h1>
                        <div class="col-md-11 offset-1 mt-5 mb-5">
                            <div style="width: 900px; color: rgb(3, 3, 120);">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                var booking = @json($events);
            
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev, next today',
                        center: 'title',
                        right: 'month, agendaWeek, agendaDay'
                    },
                    events: booking,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, alldays){
                        $('#bookingModal').modal('toggle');

                        $('#saveBtn').click(function() {
                            var name = $('#name').val();
                            var time_in = moment(start).format('YYYY-MM-DD');
                            var time_out = moment(end).format('YYYY-MM-DD');

                            $.ajax({
                                url:"{{ route('calender.store')}}",
                                type: "POST",
                                dataType: "json",
                                data: { name, time_in, time_out },
                                success:function(response)
                                {
                                },
                                error:function(error)
                                {
                                    if(error.responseJSON.errors){
                                        $('#titleError')
                                    }
                                },
                            });
                        });
                    }
                })
            }); 
        </script>
    </body>
</html>



