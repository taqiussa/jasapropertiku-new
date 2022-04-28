var notyf = new Notyf({
    duration: 5000,
    position: {
        x: 'right',
        y: 'top',
    },
    dismissible: true,
    types: [
        {
            type: 'warning',
            background: 'orange',
            icon: false,
        },
    ]
});
window.addEventListener('notyf:success', event => {
    // notyf[event.detail.type](event.detail.message);
    notyf.open({
        type: event.detail.type,
        message: event.detail.message,
    });
});
window.addEventListener('swal:notif', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
    });
});
window.addEventListener('confirm:delete', event => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonText: "Yes, Delete",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            window.livewire.emit('delete', event.detail.id);
        }
    });
});
window.addEventListener('confirm:confirm', event => {
    Swal.fire({
        title: 'Anda Yakin?',
        text: "Postingan Ini akan di konfirmasi",
        showCancelButton: true,
        confirmButtonText: "Ya, Konfirmasi",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            window.livewire.emit('confirm', event.detail.id);
        }
    });
});