@extends('backend.layout.app')

@section('content')
    
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="panelp.html">Panel Principal</a>
            </li>
            <li class="breadcrumb-item active">Calendario</li>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar">
                            <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                        </div>
                    </form>
                </li>
            </ul>
        </ol>
        
        <!-- eventos -->
        <div id='wrap'>
            
            <div id='external-events'>
                <h4>Draggable Events</h4>
                <div class='fc-event'>My Event 1</div>
                <div class='fc-event'>My Event 2</div>
                <div class='fc-event'>My Event 3</div>
                <div class='fc-event'>My Event 4</div>
                <div class='fc-event'>My Event 5</div>
                <p>
                    <input type='checkbox' id='drop-remove'/>
                    <label for='drop-remove'>remove after drop</label>
                </p>
            </div>
            
            <div id='calendar'></div>
            
            <div style='clear:both'></div>
        
        </div>
    
    </div>
@endsection

@section('after-scripts')
    
    @include('backend.calendar.includes.after_scripts')

@endsection

@section('modal-create')
    @include('backend.calendar.includes.create_modal')
@endsection