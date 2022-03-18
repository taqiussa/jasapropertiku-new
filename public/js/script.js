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