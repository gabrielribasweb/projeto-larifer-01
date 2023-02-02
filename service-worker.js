importScripts("js/workbox-sw.js");

if (workbox) {
  console.log(`Yay! Workbox is loaded 🎉`);
} else {
  console.log(`Boo! Workbox didn't load 😬`);
}

workbox.routing.registerRoute(
  // Cache CSS files.
  /\.js$/,
  // Use cache but update in the background.
  new workbox.strategies.StaleWhileRevalidate({
    // Use a custom cache name.
    cacheName: "js-cache",
    plugins: [
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
        maxEntries: 20, // only cache 20 request
        purgeOnQuotaError: true,
      }),
    ],
  })
);

workbox.routing.registerRoute(
  // Cache CSS files.
  /\.php/,
  // Use cache but update in the background.
  new workbox.strategies.StaleWhileRevalidate({
    // Use a custom cache name.
    cacheName: "php-cache",
    plugins: [
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
        maxEntries: 20, // only cache 20 request
        purgeOnQuotaError: true,
      }),
    ],
  })
);

workbox.routing.registerRoute(
  // Cache CSS files.
  /\.(?:eot|ttf|woff|woff2)$/,
  // Use cache but update in the background.
  new workbox.strategies.StaleWhileRevalidate({
    // Use a custom cache name.
    cacheName: "fonts-cache",
    plugins: [
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
        maxEntries: 20, // only cache 20 request
        purgeOnQuotaError: true,
      }),
    ],
  })
);

workbox.routing.registerRoute(
  // Cache CSS files.
  /\.css$/,
  // Use cache but update in the background.
  new workbox.strategies.StaleWhileRevalidate({
    // Use a custom cache name.
    cacheName: "css-cache",
    plugins: [
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 7, // cache for one week
        maxEntries: 20, // only cache 20 request
        purgeOnQuotaError: true,
      }),
    ],
  })
);

workbox.routing.registerRoute(
  // Cache image files.
  /\.(?:png|jpg|jpeg|svg|gif)$/,
  // Use the cache if it's available.
  new workbox.strategies.CacheFirst({
    // Use a custom cache name.
    cacheName: "image-cache",
    plugins: [
      new workbox.expiration.Plugin({
        // Cache only 30 images.
        maxEntries: 30,
        // Cache for a maximum of a week.
        maxAgeSeconds: 7 * 24 * 60 * 60,
      }),
    ],
  })
);