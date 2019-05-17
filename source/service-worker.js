const OFFLINE_URL = '/offline/';
const CACHE_VERSION = 27;
const CACHE_NAME = 'howtocodewell-' + CACHE_VERSION;

const URLS_TO_CACHE = [
    // '/',
    // '/sponsor/',
    // '/season/',
    // '/assets/css/site.css',
    // '/assets/images/icons/google-podcast.svg',
    // '/assets/images/icons/itunes.svg',
    // '/assets/images/icons/overcast.svg',
    // '/assets/images/icons/rss.svg',
    // '/assets/images/icons/spotify.svg',
    // '/assets/images/icons/stitcher.svg',
    // '/assets/images/logos/howtocodewell_logo_192x192.png',
    // '/assets/images/logos/howtocodewell_logo_512x512.png',
    // '/assets/images/logos/howtocodewell_logo_32x32.png',
    // '/assets/images/profile/7hw_saAP_400x400.jpg',
    // '/assets/images/profile/8avDLD-t_400x400.jpg',
    // '/assets/images/profile/b7b-8Thn_400x400.jpg',
    // '/assets/images/profile/CMCNNCGx_400x400.jpg',
    // '/assets/images/profile/CYhzS7dJ_400x400.png',
    // '/assets/images/profile/eTL5nGaH_400x400.jpg',
    // '/assets/images/profile/jYeKQQdE_400x400.jpg',
    // '/assets/images/profile/MwrJuJM__400x400.png',
    // '/assets/images/profile/n4Y3CzVa_400x400.png',
    // '/assets/images/profile/NA5jYXmm_400x400.jpg',
    // '/assets/images/profile/PROx6DC0_400x400.jpeg',
    // '/assets/images/profile/rwLvlp25_400x400.jpg',
    // '/assets/images/profile/TSlMrGu0_400x400.jpg',
    // '/assets/images/profile/uCplUZ1P_400x400.jpg',
    // '/assets/images/profile/uLwpVqYf_400x400.jpg',
    // '/assets/images/profile/vNR3QP0D_400x400.jpg',
    // '/assets/images/profile/xBrKM3Vg_400x400.jpg',
    // '/assets/images/profile/XBSj69e5_400x400.jpg',
    // '/assets/images/profile/xir0RfsZ_400x400.jpg',
    // '/assets/images/profile/mIOWZK8h_400x400.jpg',
    // OFFLINE_URL
];

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