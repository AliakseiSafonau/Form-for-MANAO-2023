class HandleDataFrontEnd {
    constructor(jsFormController) {
        this.jsFormController = jsFormController;
        this.dataHandle = this.dataHandle.bind(this);
    }
    
    formsHandler() {
        const signInBtn = document.getElementsByClassName('signin-btn')[0],
        signUpBtn = document.getElementsByClassName('signup-btn')[0],

        formBox = document.getElementsByClassName('form-box')[0],

        sign = document.getElementsByClassName('sign')[0],

        registration = document.getElementsByClassName('form__btn_signup')[0],
        authentication = document.getElementsByClassName('form__btn_signin')[0];

        signUpBtn.addEventListener('click', function () {
            formBox.classList.add('active');
            sign.classList.add('active');
        });

        signInBtn.addEventListener('click', function () {
        formBox.classList.remove('active');
        sign.classList.remove('active');
        });
        
        registration.addEventListener('click', this.dataHandle);
        authentication.addEventListener('click', this.dataHandle);
    }

    dataHandle(event) {
        event.preventDefault();
        //const utils = new AddUtils;

        let target = event.target;

        if (target.className === 'form__btn form__btn_signup') {
            let form = document.querySelector('[name="form_signup"]'),
                inputs = form.getElementsByTagName('input');

            if (inputs.login.value.trim() &&
                inputs.email.value.trim() &&
                inputs.password.value.trim() &&
                inputs.confirm_password.value.trim() &&
                inputs.name.value.trim()) {
                let data = { 
                    'login': inputs.login.value.trim(),
                    'email': inputs.email.value.trim(),
                    'password': inputs.password.value.trim(),
                    'confirm_password': inputs.confirm_password.value.trim(),
                    'name': inputs.name.value.trim()
                };
                
                this.jsFormController.dataCollect(data).then(failed => {
                    if (failed['result']){
                        if (failed['result'] === 'ok') {
                        window.location.href = 'http://localhost/startpage.php';
                    } else if (failed['result'] === '-1') {
                        document.getElementsByClassName('form_signup-confirm_password form__error')[0].classList.toggle('active');
                        inputs.password.value = '';
                        inputs.confirm_password.value = '';
                    } 
                    } else {
                        if (failed['login'] === 'failure') {
                            document.getElementsByClassName('form_signup-login form__error')[0].classList.toggle('active');
                        }
                        if (failed['password'] === 'failure') {
                            document.getElementsByClassName('form_signup-password form__error')[0].classList.toggle('active');
                        }
                        if (failed['email'] === 'failure') {
                            document.getElementsByClassName('form_signup-email form__error')[0].classList.toggle('active');
                        }
                    }
                    console.log(failed);
                })
            }

        } 
        
        if (target.className === 'form__btn form__btn_signin'){
            let form = document.querySelector('[name="form_signin"]'),
                inputs = form.getElementsByTagName('input');

            if (inputs.login.value.trim() && inputs.password.value.trim()) {
                let data = { 'login': inputs.login.value.trim(), 'password': inputs.password.value.trim(), 'blu': 'blu'};
                this.jsFormController.dataCollect(data).then(failed => {
                    if (failed['result']){
                        if (failed['result'] === 'ok') {
                        window.location.href = 'http://localhost/startpage.php';
                    } else {
                        document.getElementsByClassName('form_signin-error form__error')[0].classList.toggle('active')
                    }}
                    /*if (failed) {
                        let div = document.createElement('div');
                        div.innerText = `Введены неправильные имя пользователя или пароль!`;
                        div.className = 'alert';
                        const error = document.getElementsByClassName('form_signin')[0];
                        error.append(div);
                    }*/
                    console.log(failed);
                })
            }
        }
    }
}

export default HandleDataFrontEnd