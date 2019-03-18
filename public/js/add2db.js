const formBtn = document.querySelector('form__btn-link');
formBtn.addEventListener('click', () => {
    submitForm();
});
function submitForm(e, form){
    e.preventDefault();
    fetch('/product/save', {
        method: 'post',
        body: JSON.stringify({product_id: form.product_id.value, name: form.name.value, email: form.email.value})
    });
}

