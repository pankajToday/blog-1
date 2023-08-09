// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');


importScripts('https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.10.1/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/

firebase.initializeApp({
    apiKey: "AIzaSyDMVVjRFQXdVz_ihqQhK5JfM8-CNkqXF7g",
    authDomain: "blog-push-notification-ae861.firebaseapp.com",
    projectId: "blog-push-notification-ae861",
    storageBucket: "blog-push-notification-ae861.appspot.com",
    messagingSenderId: "296403719454",
    appId: "1:296403719454:web:656e9ac38e85860d7b650f",
    measurementId: "G-CXCKSK7SY5"
});

const messaging = firebase.messaging();
messaging.onBackgroundMessage((payload) => {
    console.log(
        '[firebase-messaging-sw.js] Received background message ',
        payload
    );
    // Customize notification here
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: 'https://png.pngtree.com/png-clipart/20210418/original/pngtree-my-love-heart-png-image_6226406.jpg'
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
console.log('firebase-messaging-sw.js loaded..')


