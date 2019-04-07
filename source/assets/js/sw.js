const URLS_TO_CACHE = [
  '/',
  '/assets/css/site.css'
];

const CACHE_NAME = 'howtocodewell-v1';

self.addEventListener('install', event => {
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(cache =>
        cache.addAll(URLS_TO_CACHE)
      )
  )
});

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



    })
  );
});


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