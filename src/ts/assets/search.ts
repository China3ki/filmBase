export const searchEngine = async (e) => {
  const searchData = new FormData();
  const headerInput: HTMLInputElement = document.querySelector('.header__input');
  headerInput.value = e.target.value;
  searchData.append('data', e.target.value);
  const fetchSearch = await fetch('inc/assets/search.inc.php', {
    method: 'POST',
    body: searchData,
  });
  const resData = await fetchSearch.json();
  return renderData(resData);
};

export const renderData = (data) => {
  const results: HTMLElement = document.querySelector('.search__results');
  results.replaceChildren();
  data.forEach((row) => {
    const { name, cover, actor1, actor2 } = row;
    const searchResults: HTMLElement = document.createElement('div');
    const resultImage: HTMLImageElement = document.createElement('img');
    const resultInfo: HTMLElement = document.createElement('div');
    const resultProduction: HTMLElement = document.createElement('div');
    const resultName: HTMLElement = document.createElement('span');
    const resultYear: HTMLElement = document.createElement('span');
    const resultActors: HTMLElement = document.createElement('span');

    searchResults.classList.add('search__result');
    resultImage.classList.add('result__image');
    resultInfo.classList.add('result__info');
    resultProduction.classList.add('result__production');
    resultName.classList.add('result__name');
    resultYear.classList.add('result__year');
    resultActors.classList.add('result__actors');

    resultImage.src = cover;
    resultImage.alt = name;
    resultName.textContent = name;
    resultYear.textContent = '2010';
    resultActors.textContent = `${actor1}, ${actor2}`;

    if (actor1 === null) {
      resultActors.textContent = '';
    }
    if (actor2 === null) {
      resultActors.textContent = actor1;
    }

    results.appendChild(searchResults);
    searchResults.appendChild(resultImage);
    searchResults.appendChild(resultInfo);
    resultInfo.appendChild(resultProduction);
    resultProduction.appendChild(resultName);
    resultProduction.appendChild(resultYear);
    resultInfo.appendChild(resultActors);
  });
};
