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

  //Obtener elementos
  const preObject = document.getElementById('objeto');
  const ulList = document.getElementById('lista');

  //Crear Referencias
  const dbRefObject = firebase.database().ref().child('objeto');

  const dbRefList = dbRefObject.child('habilidades');

  // Sincronizar cambios objeto
  dbRefObject.on('value', snap => {
    console.log(snap.val());
    preObject.innerText = JSON.stringify(snap.val(),null, 3);
  });

  // Sincronizar cambios objeto
  dbRefList.on('child_added', snap => {
    //console.log(snap.val());
    const li= document.createElement('li');
    li.id=snap.key;
    li.innerText= snap.val();
    ulList.appendChild(li);


  });

//sincroniza los cambiados
    dbRefList.on('child_changed', snap => {
  const liChanged = document.getElementById('snap.key');
  liChanged.innerText=snap.val();

  });
    //sincroniza los eliminados
    dbRefList.on('child_removed', snap => {
  const liRemove = document.getElementById('snap.key');
  liRemove.remove();

  });


} ());

