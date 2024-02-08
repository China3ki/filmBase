import { messageInfo } from './error.js';

export const login = async (e) => {
  e.preventDefault();
  const loginForm: HTMLFormElement = document.querySelector('.login__form--login');
  const pswdInput: HTMLInputElement = document.querySelector('#passwordLogin');
  const emailInput: HTMLInputElement = document.querySelector('#emailLogin');
  const emailExist: boolean | string = await accountExist(emailInput.value);
  const pswdExist: boolean | string = await pswdCorrect(pswdInput.value, emailInput.value);
  if (emailExist !== true) return messageInfo(emailExist);
  if (pswdExist !== true) {
    return messageInfo(pswdExist);
  } else {
    loginForm.submit();
  }
};
const pswdCorrect = async (pswd: string, email: string) => {
  const pswdCheck = new FormData();
  pswdCheck.append('passwordLogin', pswd);
  pswdCheck.append('emailLogin', email);
  pswdCheck.append('check', 'true');
  try {
    const check = await fetch('inc/assets/login.inc.php', {
      body: pswdCheck,
      method: 'POST',
    });
    const pswdExist: string = await check.text();
    if (pswdExist === 'false') return 'Hasło się nie zgadza! Spróbuj ponownie!';
    else return true;
  } catch {
    return 'Coś poszło nie tak. Spróbuj ponownie póżniej!';
  }
};

const accountExist = async (email: string) => {
  const data = new FormData();
  data.append('email', email);
  try {
    const account = await fetch('inc/assets/login.inc.php', {
      body: data,
      method: 'POST',
    });
    const exist: string = await account.text();

    if (exist === 'true') return true;
    else return 'Konto nie istnieje!';
  } catch {
    return 'Coś poszło nie tak. Spróbuj ponownie póżniej!';
  }
};
