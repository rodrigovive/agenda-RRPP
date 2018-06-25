@extends('backend.layout.app')

@section('content')
    
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="index.html">Página Principal</a>
                    </li>
                    <li class="active">Calendar</li>
                </ul>
                <!-- /.breadcrumb -->
                
                <div class="nav-search" id="nav-search">
                    <form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off"/>
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
                    </form>
                </div>
                <!-- /.nav-search -->
            </div>
            
            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>
                    
                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div>
                        <!-- /.pull-left -->
                        
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>
                            
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off"/>
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div>
                        <!-- /.pull-left -->
                    </div>
                    <!-- /.ace-settings-box -->
                </div>
                <!-- /.ace-settings-container -->
                
                <div class="page-header">
                    <h1>
                        Full Calendar
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            with draggable and editable events
                        </small>
                    </h1>
                </div>
                <!-- /.page-header -->
                
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="space"></div>
                                
                                <div id="calendar"></div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="widget-box transparent">
                                    <div class="widget-header">
                                        <h4>Draggable events</h4>
                                    </div>
                                    
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <div id="external-events">
                                                <div class="external-event label-grey" data-class="label-grey">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 1
                                                </div>
                                                
                                                <div class="external-event label-success" data-class="label-success">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 2
                                                </div>
                                                
                                                <div class="external-event label-danger" data-class="label-danger">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 3
                                                </div>
                                                
                                                <div class="external-event label-purple" data-class="label-purple">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 4
                                                </div>
                                                
                                                <div class="external-event label-yellow" data-class="label-yellow">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 5
                                                </div>
                                                
                                                <div class="external-event label-pink" data-class="label-pink">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 6
                                                </div>
                                                
                                                <div class="external-event label-info" data-class="label-info">
                                                    <i class="ace-icon fa fa-arrows"></i>
                                                    My Event 7
                                                </div>
                                                
                                                <label>
                                                    <input type="checkbox" class="ace ace-checkbox" id="drop-remove"/>
                                                    <span class="lbl"> Remove after drop</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PAGE CONTENT ENDS -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.page-content -->
        </div>
    </div>

@endsection

@section('after-scripts')

    @include('backend.calendar.includes.after-scripts')
    
@endsection