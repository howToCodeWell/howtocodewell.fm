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
// Remove all profile pics if offline
if(!navigator.onLine){
  const elements = document.getElementsByClassName("profile_pic");
  while (elements.length > 0) elements[0].remove();
}