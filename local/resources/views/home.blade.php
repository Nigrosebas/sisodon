@extends('layouts.app')

@section('content')

                        <script>

                            $(document).ready(function() {
                                var initialLangCode = 'es';

                                    var calendar = $('#calendar').fullCalendar({


                                    header: {
                                        left: 'prev,next today',
                                        center: 'title',
                                        right: 'month,agendaWeek,agendaDay'
                                    },
                                    selectHelper: true,
                                    contentHeight: 995,
                                    minTime: "08:30:00",
                                    maxTime: "19:00:00",
                                    lang: initialLangCode,
                                    defaultView: 'agendaWeek',
                                    weekends:false,
                                    buttonIcons: true, // show the prev/next text
                                    weekNumbers: true,
                                    slotDuration: '00:15:00', 
                                    slotLabelInterval: '00:15:00',
                                    editable: true,
                                    selectable: true,
                                    agendaWeek:true,
                                    select: function(start, end) {
                                        var title = prompt('Event Title:');
                                        var rut = prompt('Event Rut:');
                                        var eventData;
                                        if (title) {
                                            eventData = {
                                            title: title,
                                            //url: rut,
                                            start: start,
                                            end: end
                                            };
                                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                                        }
                                    $('#calendar').fullCalendar('unselect');
                                    },

                                    eventClick:  function(event, jsEvent, view) {
                                        $('#modalTitle').html(event.title);
                                        $('#modalBody').html(event.description);
                                        $('#eventUrl').attr('href',event.url);
                                        $('#fullCalModal').modal();
                                    },
        
                                    timeFormat: {
                                    agenda: 'H(:mm)' //h:mm{ - h:mm}'
                                    },
                                    //snapMinutes:'00:35:00',
                                    eventLimit: false, // allow "more" link when too many events
                                    events: {
                                        url: 'packages/json/events.json',
                                        error: function() {
                                            $('#script-warning').show();
                                        }
                                    }

                                });
                            });

                        </script>
<style>

    body2 {
        margin: 0;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #top {
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        font-size: 12px;
    }

    #calendar {
        max-width: 1000px;
        margin: 40px auto;
        padding: 0 10px;
    }

</style>

<body2>
    <div id='top'></div>
    <div id='calendar'></div>
<div id="fullCalModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                <h4 id="modalTitle" class="modal-title"></h4>
            </div>
            <div id="modalBody" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary"><a id="eventUrl" target="_blank">Event Page</a></button>
            </div>
        </div>
    </div>
</div>




</body2>
@endsection