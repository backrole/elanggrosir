// var openmodal = document.querySelectorAll('.modal-open')
// for (var i = 0; i < openmodal.length; i++) {
//     openmodal[i].addEventListener('click', function (event) {
//         event.preventDefault()
//         toggleModal()
//     });
// }

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function (evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};

function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}

$('body').on('click', '.modal-open', function (event) {
    event.preventDefault();
    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title');

    title == 'Detail' ? $('#modal-save').addClass('hidden') : $('#modal-save').removeClass('hidden');
    $('#modal-title').text(title);
    $('#modal-save').text(me.hasClass('edit') ? 'Perbarui' : 'Simpan');


    $.ajax({
        url: url,
        dataType: 'html',
        success: function (response) {
            $('#modal-body').html(response);
        }
    });
    toggleModal();
});

$('#modal-save').click(function (event) {
    event.preventDefault();

    var form = $('#modal-body form'),
        url = form.attr('action'),
        method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';

    form.find('.mt-1').removeClass('border-red-500');

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        success: function (res) {
            form.trigger('reset');
            toggleModal();
            $('#dataTable').DataTable().ajax.reload();

            method == 'POST' ? Swal.fire(
                'Tambah Data Berhasil!',
                'Tabel telah diperbarui!',
                'success'
            ) : Swal.fire(
                'Update Data Berhasil!',
                'Tabel telah diperbarui!',
                'success'
            );
        },
        error: function (xhr) {
            var res = xhr.responseJSON;
            if ($.isEmptyObject(res) == false) {
                $.each(res.errors, function (key, value) {
                    $('#' + key)
                        .closest('.mt-1')
                        .addClass('border-solid')
                        .addClass('border-red-500')
                        .attr('placeholder', 'Isian tidak boleh kosong!')
                });
            }
        }
    });
});

$('body').on('click', '.modal-delete', function (event) {
    event.preventDefault();
    var me = $(this),
        url = me.attr('href'),
        title = me.attr('title'),
        csrf_token = $('meta[name="csrf-token"]').attr('content');
    Swal.fire({
        title: 'Hapus data ' + title + '?',
        text: "Anda tidak akan bisa mengembalikan data yang sudah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token,
                },
                success: function (res) {
                    $('#dataTable').DataTable().ajax.reload();
                    Swal.fire(
                        'Berhasil menghapus ' + title + '!',
                        'Tabel telah diperbarui!',
                        'success'
                    );
                },
                error: function (xhr) {
                    Swal.fire(
                        'Gagal menghapus ' + title + '!',
                        'Tidak ada data yang berubah!',
                        'error'
                    )
                }
            });
        }
    });
});
