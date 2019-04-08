if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js')
    .then(registration => {
      // Service worker is registered

    })
    .catch(err => {
      // Registration has failed
    });
  });
}