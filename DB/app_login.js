(function() {

//Inicializar Firebase
const config = {
  apiKey: "AIzaSyDFTmKSMtQfwmals2lS2XdZ8rOrZKzDme4",
  authDomain: "tipo-cambio-sbs.firebaseapp.com",
  databaseURL: "https://tipo-cambio-sbs.firebaseio.com",
  storageBucket: "tipo-cambio-sbs.appspot.com",
  messagingSenderId: "626611516199"
};
firebase.initializeApp(config);




// Obtener elementos
const txtEmail = document.getElementById('txtEmail');
const txtPassword = document.getElementById('txtPassword');
const btnLogin = document.getElementById('btnLogin');
const btnSignUp = document.getElementById('btnSignUp');
const btnLogout = document.getElementById('btnLogout');

  // Añadir Evento login
  btnLogin.addEventListener('click', e => {
    //Obtener email y pass
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();
    // Sign in
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));   
  });

  // Añadir evento signup
  btnSignUp.addEventListener('click', e => {
    // Obtener email y pass
    // TODO: comprobar que el email sea real
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();
    // Sign in
    const promise = auth.createUserWithEmailAndPassword(email, pass);
    promise.catch(e => console.log(e.message));
  });

  btnLogout.addEventListener('click', e => {
    firebase.auth().signOut();
  });

  // Añadir un listener en tiempo real
  firebase.auth().onAuthStateChanged( firebaseUser => {
    if(firebaseUser) {
      console.log(firebaseUser);
      btnLogout.classList.remove('hide');
    } else {
      console.log('no logueado');
      btnLogout.classList.add('hide');
    }    
  });


//-------------
const  btn_VerificarUsuario= document.getElementById('btn_VerificarUsuario');
  // Añadir Evento login
  btn_VerificarUsuario.addEventListener('click', e => {

    var user = firebase.auth().currentUser;
     if (user != null) {
      user.providerData.forEach(function (profile) {
        console.log("Sign-in provider: "+profile.providerId);
        console.log("  Provider-specific UID: "+profile.uid);
        console.log("  Name: "+profile.displayName);
        console.log("  Email: "+profile.email);
        console.log("  Photo URL: "+profile.photoURL);
      });
    }
  });






} ());

