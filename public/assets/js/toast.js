Livewire.on('message', message => {
    Codebase.helpers('notify', {
        align: 'center',             // 'right', 'left', 'center'
        from: 'top',                // 'top', 'bottom'
        type: 'success',               // 'info', 'success', 'warning', 'danger'
        icon: 'fa fa-info mr-5',    // Icon class
        message: message
    });
})
