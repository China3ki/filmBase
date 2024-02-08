export let removeTimeout;
export const messageInfo = (message: string) => {
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
