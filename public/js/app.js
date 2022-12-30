const copyCode = document.querySelectorAll('.copy-code');
const toast = document.getElementById('liveToast');

copyCode.forEach(copyC => {
    copyC.addEventListener('click', () => {
        navigator.clipboard.writeText('DISKON60K');
        const toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    });
});