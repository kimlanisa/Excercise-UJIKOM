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
            text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Pembayaran</span>',
            className: 'create-new btn btn-primary',
            action : function ( e, dt, node, config ) {
                window.location.href = '/pembayaran/create';
            }
            }
        ]
        });
        $('div.head-label').html('<h5 class="card-title mb-0">Data Tipe Pembayaran</h5>');
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
        title: 'Kamu Serius?',
        text: "Datanya bakal kehapus nih!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Iya, Hapus aja!',
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
            text: 'Oke! Tipe Pembayaran Sudah Dihapus.',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
            form.submit();

        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'Cancelled',
            text: 'Tenang.. Data Tipe Pembayaran Sudah Aman :)',
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


