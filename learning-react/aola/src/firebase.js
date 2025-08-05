// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getDatabase } from "firebase/database";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyD0UKJEx9uabr6Tp10QjdfEp3M5ItJiSWY",
  authDomain: "aola-2f4b8.firebaseapp.com",
  databaseURL: "https://aola-2f4b8-default-rtdb.firebaseio.com",
  projectId: "aola-2f4b8",
  storageBucket: "aola-2f4b8.firebasestorage.app",
  messagingSenderId: "159861647282",
  appId: "1:159861647282:web:23e29fd255af32a8e9a6ab",
  measurementId: "G-EQSKZZRECT"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const database = getDatabase(app);
export { database };
