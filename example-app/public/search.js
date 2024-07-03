window.onload = function() {
    document.getElementById('header-search-button').addEventListener('click', function() {
      var searchBar = document.getElementById('searchBar');
      searchBar.classList.toggle('hidden');
    });
  };
