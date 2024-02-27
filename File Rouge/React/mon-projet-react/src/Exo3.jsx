import { useState } from "react";

function Exo3() {
    const [inputValue, setInputValue] = useState('');
    const [liste, setListe] = useState(['']);

    const handleInputValue = (event) => {
        setInputValue(event.target.value);
    }

    const handleListe = () => {
        setListe([inputValue, ...liste]);
    }

    return (
        <>
            <div>
                <h3>Exercice 3</h3>
                <input type="text" placeholder="Entrez un texte" onChange={handleInputValue} />
                <button onClick={handleListe}>Ajouter</button>

                {
                    liste.map( (element, index) =>
                        (
                            <div key={index}>
                                {element}
                            </div>
                        )
                    )
                }
            </div>
        </>
    );
}

export default Exo3;