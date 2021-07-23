$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
    });
    
    $('.tampilModalEdit').on('click', function() {
        $('#formModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getEdit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id)
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });
    });

});