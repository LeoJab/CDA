import { useState, useEffect } from "react";
import axios from "axios";

function CategorieAll () {
    
    const [liste, setListe] = useState();

    useEffect( () => {
        axios("http://127.0.0.1:8000/api/categories", 
            {
                headers: { "Accept": "application/json"}
            }
        ).then(
            (response)=>{
                console.log(response.data);
                setListe(response.data);
            }
        )
    }, [])

    return (
        <div>
            {
                liste.map((element, index) =>
                    (
                        <div key={index}>
                            <p>{element.description}</p>
                        </div>
                    )
                )
            }
        </div>
    );
}

export default CategorieAll;