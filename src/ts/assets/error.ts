export let removeTimeout;
export const messageInfo = (message: string, typeOfMessage: string) => {
  const accountMessages: HTMLElement = document.querySelector('.account__messages');
  const accountMessage: HTMLElement = document.createElement('div');
  const messageIcon: HTMLElement = document.createElement('span');
  const messageInfo: HTMLElement = document.createElement('span');
  const emptySpan: HTMLElement = document.createElement('span');

  messageInfo.classList.add('message__info');
  messageIcon.classList.add('material-symbols-outlined', 'message__icon');
  switch (typeOfMessage) {
    case 'error':
      accountMessage.classList.add('account__message', 'error');
      messageIcon.textContent = 'cancel';
      break;
    case 'done':
      accountMessage.classList.add('account__message', 'done');
      messageIcon.textContent = 'done';
  }

  messageInfo.textContent = message;
  removeTimeout = clearTimeout(removeTimeout);
  accountMessages.appendChild(accountMessage);
  accountMessage.appendChild(messageIcon);
  accountMessage.appendChild(messageInfo);
  accountMessage.appendChild(emptySpan);
  removeTimeout = setTimeout(() => {
    accountMessages.replaceChildren();
  }, 3000);
};
