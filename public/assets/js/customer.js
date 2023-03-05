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
                window.location.href = '/customer/print';
            }
                },
                {
                text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                className: 'dropdown-item',
                action : function ( e, dt, node, config ) {
                window.location.href = '/customer/excel';
            }
                },
                {
                text: '<i class="ti ti-file-description me-1"></i>PDF',
                className: 'dropdown-item',
                action : function ( e, dt, node, config ) {
                window.location.href = '/customer/pdf';
            }
                },
            ]
            },
            {
            text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Customer</span>',
            className: 'create-new btn btn-primary',
            action : function ( e, dt, node, config ) {
                window.location.href = '/customer/create';
            }
            }
        ]
        });
        $('div.head-label').html('<h5 class="card-title mb-0">Management Data Customer</h5>');
    }

    if (dt_show_table.length) {
        dt_show = dt_show_table.DataTable({
        scrollX: true,
        displayLength: 10,
        });
    }

    if (confirmDelete) {
    confirmDelete.onclick = function (e) {
        var form =  $(this).closest("form");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        customClass: {
          confirmButton: 'btn btn-primary me-3',
          cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'Deleted!',
            text: 'Customer data has been deleted.',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
            form.submit();

        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'Cancelled',
            text: 'Customers data is safe :)',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    };
  }
});


