export const searchEngine = async (e) => {
  const searchData = new FormData();
  searchData.append('data', e.target.value);
  const fetchSearch = await fetch('inc/assets/search.inc.php', {
    method: 'POST',
    body: searchData,
  });
  console.log(await fetchSearch.text());
};
