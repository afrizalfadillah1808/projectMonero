const copyCode = document.querySelectorAll('.copy-code');
const toast = document.getElementById('liveToast');

copyCode.forEach(copyC => {
    copyC.addEventListener('click', () => {
        navigator.clipboard.writeText('DISKON60K');
        const toast = new bootstrap.Toast(document.getElementById('liveToast'));
        toast.show();
    });
});

const namaCourse = document.querySelector('#namaCourse');
const slugCourse = document.querySelector('#slugCourse');

namaCourse.addEventListener('change', function () {
    fetch('/dashboard/courses/checkSlug?namaCourse=' + namaCourse.value)
        .then(response => response.json())
        .then(data => slugCourse.value = data.slug)
});

const img = document.querySelector('#imgCourse');
const imgPreview = document.querySelector('#imgPreview');

img.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(img.files[0]);

    file.onload = function(e) {
        imgPreview.src = e.target.result;
        imgPreview.classList.remove('d-none');
    }
});