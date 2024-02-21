import {React, useState} from 'react';

const Exo1 = (props) => {

  const [nom, setNom] = useState('');

  const handleChangeNom = (event) => {
      setNom(event.target.value);
  }

  const [prenom, setPrenom] = useState('');

  const handleChangePrenom = (event) => {
      setPrenom(event.target.value);
  }

  return (
      <>
          <div>
                <h2>Exercice 1</h2>
                <input type="text" placeholder='Nom' value={nom} onChange={handleChangeNom}/>
                <input type="text" placeholder='Prenom' value={prenom} onChange={handleChangePrenom}/>
                <p>Bonjour {nom} {prenom}</p>
          </div>
      </>
  );
}

export default Exo1 ;