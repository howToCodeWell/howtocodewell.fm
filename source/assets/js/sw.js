const filesToCache = [
  '/',
  'assets/css/site.css'
];

const cacheName = 'howtocodewell-v1';
self.addEventListener('install', event => {
  event.waitUntil(
    caches
      .open(cacheName)
      .then(cache =>
        cache.addAll(filesToCache)
      )
  )
});

self.addEventListener('fetch', event => {
  console.log('Fetch event for ', event.request.url);
  event.respondWith(
    caches.match(event.request)
    .then(response => {
      if (response) {

        return response;
      }

      return fetch(event.request)

      .then(response => {

          return caches.open(cacheName).then(cache => {
            cache.put(event.request.url, response.clone());
            return response;
          });
    });

    }).catch(error => {



    })
  );
});


self.addEventListener('activate', event => {

  const cacheWhitelist = [cacheName];

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