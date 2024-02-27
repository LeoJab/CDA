import { useEffect, useState } from "react";
import axios from "axios";

function Api() {
    
    const [nom, setNom] = useState('');

    const handleRecherche = (event) => {
        setNom(event.target.value);
    }

    const [liste, setListe] = useState([]);

    useEffect(() => {
        axios.get(`http://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a&query=${nom}`,
            {
                headers: { "Accept": "application/json" }
            }
        ).then( 
            (response) => {
                setListe(response.data);
            }
        )
    }, [])

    return (

            <div>
                <h2>API The Movie DB</h2>
                <input type="text" placeholder="Entre un nom de film" value={nom} />
                <button onClick={handleRecherche}>Rechercher</button>
                {
                    liste.map( (element, index) =>
                        (
                            <div key={index}>
                                {element.title}
                            </div>
                        )
                    )
                }
            </div>

    )
}

export default Api;