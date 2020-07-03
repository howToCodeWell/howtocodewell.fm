const OFFLINE_URL = '/offline/';
const CACHE_VERSION = 110;
const CACHE_NAME = 'howtocodewell-' + CACHE_VERSION;

const URLS_TO_CACHE = [];

// Install the PWA and add URLS_TO_CACHE to the cache
self.addEventListener('install', event => {
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(cache =>
        cache.addAll(URLS_TO_CACHE)
      )
  )
});

// Fetch a page. Attempt to pull it out of cache first
// If the page isn't in the cache and the user in online then add the new page to the cache
// IF the user is not online then show the offline URL
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
    .then(response => {
      if (response) {

        return response;
      }

      return fetch(event.request)

      .then(response => {

          return caches.open(CACHE_NAME).then(cache => {
            cache.put(event.request.url, response.clone());
            return response;
          });
    });

    }).catch(error => {
        // Return offline URL
        return caches.match(OFFLINE_URL);
    })
  );
});

// Activate the PWA and delete the old cache if needed
self.addEventListener('activate', event => {

  const cacheWhitelist = [CACHE_NAME];

  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});