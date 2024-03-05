import { useState, useEffect } from "react";
import axios from "axios";

function SousCategories () {
    
    const [liste, setListe] = useState(['']);

    useEffect( () => {
        axios("http://127.0.0.1:8000/api/sous_categories/:id", 
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
        <>
        <h1 id="accueil_titre_categorie">Sous Catégories</h1>
        <div id="accueil_categorie">
            {
                liste.map((element, index) =>
                    (
                        <div className="card_categorie" key={index}>
                                <img src={element.photo} alt="photo categorie" />
                                <div className="card_categorie_lib_desc_btn">
                                    <div className="card_categorie_lib_desc">
                                        <p>{element.lib}</p>
                                        <p>{element.description}</p>
                                    </div>
                                    <btn className="btn_categorie" href="#">Visiter la sous-categorie</btn>
                                </div>
                        </div>
                    )
                )
            }
        </div>
        </>
    );
}

export default SousCategories;