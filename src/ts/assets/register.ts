export const registerValid = async (e) => {
  e.preventDefault();
  const formInput: HTMLFormElement = document.querySelector('.login__form--register');
  const conditionsArray: any[] = [
    passwordStrength(),
    await validateEmail(),
    validatePasswords(),
    validBasicData(),
  ];

  let check: number = 0;
  conditionsArray.forEach((condition) => {
    if (condition !== true) {
      return errorMessage(condition);
    } else {
      check++;
    }
  });
  if (check === conditionsArray.length) {
    formInput.submit();
  }
};
export let removeTimeout;
export const errorMessage = (message: string) => {
  const accountMessages: HTMLElement = document.querySelector('.account__messages');
  const accountMessage: HTMLElement = document.createElement('div');
  const messageIcon: HTMLElement = document.createElement('span');
  const messageInfo: HTMLElement = document.createElement('span');
  const emptySpan: HTMLElement = document.createElement('span');

  accountMessage.classList.add('account__message');
  messageIcon.classList.add('material-symbols-outlined', 'message__icon');
  messageInfo.classList.add('message__info');

  messageInfo.textContent = message;
  messageIcon.textContent = 'cancel';
  removeTimeout = clearTimeout(removeTimeout);
  accountMessages.appendChild(accountMessage);
  accountMessage.appendChild(messageIcon);
  accountMessage.appendChild(messageInfo);
  accountMessage.appendChild(emptySpan);
  removeTimeout = setTimeout(() => {
    accountMessages.replaceChildren();
  }, 3200);
};
const validBasicData = () => {
  const allInputs: NodeList = document.querySelectorAll('.login__input--register');
  let checkInput: number = 0;
  allInputs.forEach((input: HTMLInputElement) => {
    if (input.value.trim() !== '') checkInput++;
  });
  if (checkInput === allInputs.length) return true;
  else return 'Uzupełnij wszystkie pola!';
};

export const passwordStrength = () => {
  const inputPswd: HTMLInputElement = document.querySelector('#password');
  const showPswdLevel: HTMLElement = document.querySelector('.login__level');
  showPswdLevel.classList.remove('weak');
  showPswdLevel.classList.remove('mid');
  showPswdLevel.classList.remove('strong');
  if (
    inputPswd.value.length >= 8 &&
    ((inputPswd.value.match(/[A-Z]/) &&
      !inputPswd.value.match(/[-._!"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+/)) ||
      (!inputPswd.value.match(/[A-Z]/) &&
        inputPswd.value.match(/[-._!"`'#%&,:;<>=@{}~\$\(\)\*\+\/\\\?\[\]\^\|]+/)))
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

    return 'Hasło jest za słabe!';
  }
};

const emailExits = async (email) => {
  const data = new FormData();
  data.append('checkEmail', email);
  try {
    const checkEmail = await fetch('inc/assets/register.php', {
      body: data,
      method: 'POST',
    });
    return await checkEmail.text();
  } catch {
    return 'Coś poszło nie tak. Spróbuj ponownie póżniej!';
  }
};

const validateEmail = async () => {
  const inputEmail: HTMLInputElement = document.querySelector("[name='email']");
  const emailReg: RegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputEmail.value.match(emailReg)) {
    const checkEmailExist = await emailExits(inputEmail.value);
    if (checkEmailExist === 'true') return true;
    else return 'Adres email już istnieje';
  } else {
    return 'Adres email jest nieprawidłowy!';
  }
};
const validatePasswords = () => {
  const inputPassword: HTMLInputElement = document.querySelector('#password');
  const inputPasswordRepeat: HTMLInputElement = document.querySelector("[name='passwordr']");
  if (inputPassword.value === inputPasswordRepeat.value) return true;
  else return 'Hasła nie są takie same!';
};
