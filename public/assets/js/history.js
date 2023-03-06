/**
 * DataTables Basic
 */

'use strict';

// datatable (jquery)
$(function () {
    var dt_basic_table = $('.datatables-basic'),
            dt_show_table = $('.datatables-show'),
        dt_basic, dt_show;

    const confirmDelete = document.querySelector('.confirm-delete');
    // const confirmDelete = document.getElementsByClassName('confirm-delete');

    if (dt_basic_table.length) {
        dt_basic = dt_basic_table.DataTable({
        scrollX: true,
        dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 10,
        buttons: [
            {
            extend: 'collection',
            className: 'btn btn-label-primary dropdown-toggle me-2',
            text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
            buttons: [
                {
                text: '<i class="ti ti-printer me-1" ></i>Print',
                className: 'dropdown-item',
                action : function ( e, dt, node, config ) {
                window.location.href = '/history/print';
            }
                },
                {
                text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                className: 'dropdown-item',
                action : function ( e, dt, node, config ) {
                window.location.href = '/history/excel';
            }
                },
                {
                text: '<i class="ti ti-file-description me-1"></i>PDF',
                className: 'dropdown-item',
                action : function ( e, dt, node, config ) {
                window.location.href = '/history/pdf';
            }
                },
            ]
            },
        ]
        });
        $('div.head-label').html('<h5 class="card-title mb-0">History Transaksi</h5>');
    }

    if (dt_show_table.length) {
        dt_show = dt_show_table.DataTable({
        scrollX: true,
        displayLength: 10,
        });
    }

});


