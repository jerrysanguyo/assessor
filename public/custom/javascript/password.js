document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function() {
        const target = document.querySelector(this.dataset.target);
        const type = target.getAttribute('type') === 'password' ? 'text' : 'password';
        target.setAttribute('type', type);

        // Toggle eye icon
        const icon = this.querySelector('i');
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    });
});
