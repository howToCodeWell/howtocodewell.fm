if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/assets/js/sw.js', {
      scope: '/'
    })
    .then(registration => {
      // Service worker is registered

    })
    .catch(err => {
      // Registration has failed
    });
  });
}