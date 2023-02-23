/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
    apiKey: "AIzaSyBFa97fl-J9QCKTSvbLS9tbWfPutjhEBc4",
    authDomain: "carmelo-de-praga.firebaseapp.com",
    projectId: "carmelo-de-praga",
    storageBucket: "carmelo-de-praga.appspot.com",
    messagingSenderId: "737332109614",
    appId: "1:737332109614:web:a4d1e4c1387ea4121cdabf",
    measurementId: "G-Q13EZ9WVKV"
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
  console.log(
    "[firebase-messaging-sw.js] Received background message ",
    payload,
  );
  /* Customize notification here */
  const notificationTitle = "Background Message Title";
  const notificationOptions = {
    body: "Background Message body.",
    icon: "images/icon-96x96.png",
  };

  return self.registration.showNotification(
    notificationTitle,
    notificationOptions,
  );
});
