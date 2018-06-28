<!-- complemento de calendario -->
<script>
    $(document).ready(function () {
        $('#calendarioweb').fullCalendar({
            header: {
                left: 'today, prev,next',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth,'
            },

            dayClick: function (date, jsEvent, view) {

                $('#txtFecha').val(date.format());
                $("#ModalEventos").modal();
            },
            // eventSources:[{
            //     events:[
            //     {
            //         title:'Cumpleaños Miriam',
            //         descripcion:'ES un dia muy especial para ella y para mi',
            //         start:'2018-06-10'
            //     },
            //     {
            //         title:'cumpleaños Ariee',
            //         descripcion:'No lo se Rick',
            //         start:'2018-06-13',
            //         end:'2018-06-18'
            //     }

            // ],
            // color:"pink",
            // textcolor:"purple"
            // }],
            //events:'http://localhost/calendarioweb/eventos.php',

            //editable: true,
            //droppable: true, // this allows things to be dropped onto the calendar
            drop: function () {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },







            eventClick: function (calEvent, jsEvent, view) {
                $('#tituloEvento').html(calEvent.title);
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtID').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);

                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);

                $("#ModalEventos").modal();
            }
        });
    });
</script>

<script>
    $('#btnAgregar').click(function () {

        var NuevoEvento = {
            title: $('#txtTitulo').val(),
            start: $('#txtFecha').val() + " " + $('#txtHora').val(),
            color: $('#txtColor').val(),
            descripcion: $('#txtDescripcion').val(),
            TextColor: "#FFFFFF"
        };

        $('#calendarioweb').fullCalendar('renderEvent', NuevoEvento);
        $("#ModalEventos").modal('toggle');
    });
</script>
<script>
    $('#datetimepicker').datetimepicker();
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
    });
</script>
<!-- complemento de calendario -->

<!-- eventosssssssss -->
<script>
    $(function () {

        // initialize the external events
        // -----------------------------------------------------------------

        $('#external-events .fc-event').each(function () {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });

    });
</script>