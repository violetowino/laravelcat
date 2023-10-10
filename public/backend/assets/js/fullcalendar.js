// npm package: fullcalendar
// github link: https://github.com/fullcalendar/fullcalendar

$(function() {

  // sample calendar events data

  var Draggable = FullCalendar.Draggable;
  var calendarEl = document.getElementById('fullcalendar');
  var containerEl = document.getElementById('external-events');

  var curYear = moment().format('YYYY');
  var curMonth = moment().format('MM');

  // Calendar Event Source
  var calendarEvents = {
    id: 1,
    backgroundColor: 'rgba(1,104,250, .15)',
    borderColor: '#0168fa',
    events: [
      
    ]
  };

  // Birthday Events Source
  var birthdayEvents = {
    id: 2,
    backgroundColor: 'rgba(16,183,89, .25)',
    borderColor: '#10b759',
    events: [
    
    ]
  };


  var holidayEvents = {
    id: 3,
    backgroundColor: 'rgba(241,0,117,.25)',
    borderColor: '#f10075',
    events: [
      
    ]
  };

  var discoveredEvents = {
    id: 4,
    backgroundColor: 'rgba(0,204,204,.25)',
    borderColor: '#00cccc',
    events: [
   
    ]
  };

  var meetupEvents = {
    id: 5,
    backgroundColor: 'rgba(91,71,251,.2)',
    borderColor: '#5b47fb',
    events: [
    
    ]
  };


  var otherEvents = {
    id: 6,
    backgroundColor: 'rgba(253,126,20,.25)',
    borderColor: '#fd7e14',
    events: [
     
    ]
  };

  var bookingEvents = {
    id: 7,  // Adjust the event source ID
    backgroundColor: 'rgba(255,0,0,.25)',  // Set your desired color
    borderColor: '#ff0000',
    events: [
      // Loop through your $bookings array and create events
      // @foreach($bookings as $booking)
      //   {
      //     title: 'Booking',  // Customize the title if needed
      //     start: '{{ $booking->time_in }}',
      //     end: '{{ $booking->time_out }}',
      //     url: '{{ route('booking.show', $booking->id) }}',  // Adjust the route as needed
      //   },
      // @endforeach
    ]
  };
  
  // Add bookingEvents to the eventSources array
  
  

  new Draggable(containerEl, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText
      };
    }
  });


  // initialize the calendar
  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,today,next",
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    fixedWeekCount: true,
    // height: 300,
    initialView: 'dayGridMonth',
    timeZone: 'UTC',
    hiddenDays:[],
    navLinks: 'true',
    // weekNumbers: true,
    // weekNumberFormat: {
    //   week:'numeric',
    // },
    dayMaxEvents: 2,
    events: [],
    eventSources: [calendarEvents, birthdayEvents, holidayEvents, discoveredEvents, meetupEvents, otherEvents,bookingEvents],
    drop: function(info) {
        // remove the element from the "Draggable Events" list
        // info.draggedEl.parentNode.removeChild(info.draggedEl);
    },
    eventClick: function(info) {
      var eventObj = info.event;
      console.log(info);
      $('#modalTitle1').html(eventObj.title);
      $('#modalBody1').html(eventObj._def.extendedProps.description);
      $('#eventUrl').attr('href',eventObj.url);
      $('#fullCalModal').modal("show");
    },
    dateClick: function(info) {
      $("#createEventModal").modal("show");
      console.log(info);
    },
  });

  calendar.render();


});