export const registerValid = () => {
  const allInputs: NodeList = document.querySelectorAll('.login__input--register');
  const inputEmail: HTMLInputElement = document.querySelector("[name='email']");
  const inputPassword: HTMLInputElement = document.querySelector("[name='password']");
  const inputPasswordRepeat: HTMLInputElement = document.querySelector("[name='passwordr']");
  if (
    validateEmail(inputEmail.value) &&
    validatePasswords(inputPassword.value, inputPasswordRepeat.value)
  ) {
  }
};

export const passwordStrength = () => {
  const inputPswd: HTMLInputElement = document.querySelector("[name='password']");
  const showPswdLevel: HTMLElement = document.querySelector('.login__level');
  showPswdLevel.classList.remove('weak');
  showPswdLevel.classList.remove('mid');
  showPswdLevel.classList.remove('strong');
  if (
    inputPswd.value.length >= 8 &&
    inputPswd.value.match(/[A-Z]/) &&
    !inputPswd.value.match(/[-._!"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+/)
  ) {
    showPswdLevel.classList.add('mid');
    showPswdLevel.textContent = 'Średnie';

    return true;
  } else if (
    inputPswd.value.length >= 8 &&
    inputPswd.value.match(/[A-Z]/) &&
    inputPswd.value.match(/[-._!"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+/)
  ) {
    showPswdLevel.classList.add('strong');
    showPswdLevel.textContent = 'Silne';
    return true;
  } else {
    showPswdLevel.classList.add('weak');
    showPswdLevel.textContent = 'Słabe';

    return false;
  }
};

export const validateEmail = (email: string) => {
  const emailReg: RegExp =
    /^(([^<>()[]\\.,;:s@"]+(.[^<>()[]\\.,;:s@"]+)*)|.(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
  if (email.match(emailReg)) return true;
  else return 'Adres email jest nieprawidłowy';
};
const validatePasswords = (password: string, passwordr: string) => {
  if (password === passwordr) return true;
  else return 'Hasła nie są takie same';
};
