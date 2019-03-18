const modalOverlay = document.querySelector(".modal-overlay");
const modal = document.querySelector(".modal");
const btn = document.querySelector("#btn_modal");
const closeBtn = document.querySelector(".close-modal");
const formPage = document.querySelector(".form-page");
const formBtn = document.querySelector(".form__btn-link");

btn.addEventListener('click', (e) => {
    e.preventDefault();
    const prodId = btn.getAttribute('data-attr');
    const newInput = document.createElement('input');
    newInput.type ='hidden';
    newInput.name = 'prod_id';
    newInput.value = prodId;
    const form = document.querySelector(".form");
    form.appendChild(newInput);
    modal.classList.add('active');
    modalOverlay.classList.add('active');
});


closeBtn.addEventListener('click', function (e) {
    e.preventDefault();
    modal.classList.remove('active');
    modalOverlay.classList.remove('active');
});

modalOverlay.addEventListener('click', function (e) {
    if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
        modal.classList.remove('active');
    }
});
