import { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import axios from "axios";

function Categories () {    
    const [liste, setListe] = useState(['']);

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
        <>
        <h1 id="accueil_titre_categorie">Nos différentes catégories</h1>
        <div id="accueil_categorie">
            {
                liste.map((element, index) =>
                    (
                        <div className="card_categorie" key={index}>
                            <Link to={`/sous_categories/${element.id}`}>
                            <img src={element.photo} alt="photo categorie" />
                            <div className="card_categorie_lib_desc_btn">
                                <div className="card_categorie_lib_desc">
                                    <p>{element.lib}</p>
                                </div>
                                <div className="btn_categorie">Visiter la categorie</div>
                            </div>
                            </Link>
                        </div>
                    )
                )
            }
        </div>
        </>
    );
}

export default Categories;