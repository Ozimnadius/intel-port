/*EVENTS*/
window.addEventListener('load', function () {
    new Events();
});

class Events {
    constructor() {
        this.templates = new Templates();

        this.copyElems = document.querySelectorAll('[data-event="copy"]');

        this.openFormElems = document.querySelectorAll('[data-event="openForm"]');

        this.openAjaxFormElems = document.querySelectorAll(`[data-event="openAjaxForm"]`);

        this.validateElems = document.querySelectorAll('[data-event="validate"]');

        this.init();
    }

    init() {
        this.copyElems.forEach((i) => {
            i.addEventListener('click', this.copy);
        });

        this.openFormElems.forEach((i) => {
            i.addEventListener('click', this.openForm.bind(this));
        });

        this.openAjaxFormElems.forEach((i) => {
            i.addEventListener('click', this.openAjaxForm.bind(this));
        });

        this.validateElems.forEach((i) => {
            i.addEventListener('submit', this.validate.bind(this));
        });

        window.addEventListener('click', (e) => {
            let target = e.target;

            if (target.closest('[data-event="closeForm"]')) {
                e.preventDefault();
                this.templates.close();
            }
        });

    }

    copy() {
        const str = document.querySelector(this.dataset.target).innerText;
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
        alert('Скопировано');
    }

    openForm(e) {
        e.preventDefault();
        let dataset = e.currentTarget.dataset
        this.templates.open(dataset.name);

        $('.select').styler();
        $('.input[type="tel"]').inputmask("+7(999)999-99-99");

        this.templates.current.validate(
            {
                submitHandler: (form) => {
                    let data = $(form).serialize();

                    $.ajax({
                        dataType: "json",
                        type: "POST",
                        url: form.action,
                        data: data,
                        success: (result) => {
                            if (result.status) {
                                this.templates.close();
                                this.templates.open("formOk");
                            } else {
                                alert('Что-то пошло не так, попробуйте еще раз!!!');
                            }
                        },
                        error: function (result) {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    });
                },
                invalidHandler: function (event, validator) {
                    // debugger;
                },
                errorPlacement: function (error, element) {
                    element[0].placeholder = error[0].innerText;
                }
            }
        );
    }

    openAjaxForm(e) {
        e.preventDefault();

        let dataset = e.currentTarget.dataset;

        $.ajax({
            dataType: "json",
            type: "POST",
            url: dataset.url,
            data: {
                id: dataset.id
            },
            success: (result) => {
                if (result.status) {
                    this.templates.close();
                    $.fancybox.open(result.html);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    validate(e) {
        e.preventDefault();
        let form = e.target;

        $(form).validate(
            {
                submitHandler: (form) => {
                    let data = $(form).serialize();

                    $.ajax({
                        dataType: "json",
                        type: "POST",
                        url: form.action,
                        data: data,
                        success: (result) => {
                            if (result.status) {
                                this.templates.open("formOk");
                            } else {
                                alert('Что-то пошло не так, попробуйте еще раз!!!');
                            }
                        },
                        error: function (result) {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    });
                },
                invalidHandler: function (event, validator) {
                    // debugger;
                },
                errorPlacement: function (error, element) {
                    element[0].placeholder = error[0].innerText;
                }
            }
        );
    }
}