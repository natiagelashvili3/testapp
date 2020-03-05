@extends('admin.layout')

	@section('content')
		<link rel="stylesheet" media="screen, print" href="{{ asset('admin_resources/css/datagrid/datatables/datatables.bundle.css') }}">
		<div class="sidePad container-fluid">
	        <a href="{{ route('admin.roles.create') }}" title="Add" class="btn btn-primary waves-effect waves-themed btn-link">
	            <span class="fal fa-plus mr-1"></span>
	            Add
	        </a>
	    </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Add
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                    	    <table class="table table-hover mb-0" id="admin-dinamic-table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@yield('table')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('admin_resources/js/datagrid/datatables/datatables.bundle.js') }}"></script>
        <script type="text/javascript">
            function onDraw() {
                setTimeout(initActivateEvents, 100);
            }

            function initActivateEvents() {
                $('.actBtns.removeBtn').unbind('click')
                $('.actBtns.removeBtn').click(function() {
                    if (!confirm('Are you sure?')) return;
                    var self = this;

                    var data = $(self).data();

                    $.post(data.url, {
                        id: data.id
                    }, function(r) {
                        if (r.error) alert(r.error)
                        else $(self).parent().parent().parent().remove();
                    })
                })

                $('.dynamictable-row-activator').change(function(e) {

                    var self = $(this)
                    var active = self.prop('checked') ? 1 : 0;
                    var itemId = self.data().itemid;
                    var url = self.data().url;

                    $.post(url, {
                        id: itemId,
                        setactive: active
                    }, function(r) {
                        if (r.error) {
                            alert(r.error);
                            self.click()
                        }
                    })

                    e.stopImmediatePropagation();
                })
            }

            $(function() {

                function initDynamicTablePlugin() {

                    initActivateEvents();
                }

                function onload() {
                    initDynamicTablePlugin();
                }
            });

            $(document).ready(function() {

                $('body').on('change', function(event) {
                    onDraw();
                });
                
                $('#admin-dinamic-table').on( 'order.dt',  onDraw )
                    .on( 'search.dt', onDraw )
                    .on( 'page.dt',   onDraw ).dataTable({
                    lengthChange: true,
                    responsive: true,
                    aaSorting: [],
                    dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end dinamic-table-cols-container'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [{
                            extend: 'colvis',
                            text: 'Column Visibility',
                            titleAttr: 'Col visibility',
                            className: 'btn-outline-default'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-outline-default'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-outline-default'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-outline-default'
                        }

                    ]
                });
            });
        </script>
    @endsection