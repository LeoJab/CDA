import { useEffect, useState } from "react";
import axios from "axios";

function ProduitAll()  {
    const [liste, setListe] = useState([]);

    useEffect(()=>{
        axios("http://127.0.0.1:8000/api/produits", 
        ).then(
            (reponse)=>{
                console.log(reponse.data);
                setListe(reponse.data);
            }
        )
    }, [])

    return (
        <div>
            {
                liste.map((element, index) =>
                    (
                        <div key={index}>
                            <p>{element}</p>
                        </div>
                    )
                )
            }
        </div>
    );
}

export default ProduitAll();