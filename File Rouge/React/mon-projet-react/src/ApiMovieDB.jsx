import { useState } from "react";
import axios from "axios";

function ApiMovieDB() {
    
    const [nom, setNom] = useState('');

    const handleNom = (event) => {
        setNom(event.target.value);
    }

    const [liste, setListe] = useState(['']);

    const resultFilm = () => {
        try {
            axios.get(`http://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a&query=` + nom,
            {
                headers: { "Accept": "application/json" }
            }
            ).then( 
                (response) => {
                    setListe(response.data.results);
                    console.log(response.data.results);
                }
            )
        } catch {

        }
    } 

    return (

            <div>
                <h2>API The Movie DB</h2>
                <input type="text" placeholder="Entre un nom de film" value={nom} onChange={ handleNom } />
                <button onClick={ resultFilm }>Rechercher</button>

                {
                    liste.map((element, index) =>
                        (
                            <div key={index}>
                                <p>{element.title} {element.release_date}</p>
                            </div>
                        )
                    )
                }
            </div>

    )
}

export default ApiMovieDB;