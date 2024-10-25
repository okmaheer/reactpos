// Import Workbox
import { precaching, routing } from 'workbox-precaching';
import { registerRoute } from 'workbox-routing';
import { CacheFirst } from 'workbox-strategies';

// Pre-cache all files listed in the manifest
precaching.precacheAndRoute(self.__WB_MANIFEST || []);

// Cache API responses
registerRoute(
  ({ request }) => request.destination === 'document',
  new CacheFirst({
    cacheName: 'html-cache',
    plugins: [
      {
        cacheableResponse: { statuses: [0, 200] },
      },
    ],
  })
);
