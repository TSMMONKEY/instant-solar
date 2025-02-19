// Clear cache and cookies
function clearCacheAndCookies() {
    document.cookie = ""; // Clear cookies
  
    // Clear cache by adding a random query parameter to the current URL
    window.location.href = window.location.href + "?clearCache=" + Math.random();
  }
  
  // Perform a reload after clearing cache and cookies
  function reloadWithCacheClear() {
    clearCacheAndCookies();
    location.reload();
  }
  