window.livewire.on('openModal', () => {
    $('#employeeModal').modal('show');
});
window.livewire.on('closeModal', () => {
    $('#employeeModal').modal('hide');
});
window.livewire.on('openAlert', () => {
    $('#alertModal').modal('show');
});
window.livewire.on('closeAlert', () => {
    $('#alertModal').modal('hide');
});
