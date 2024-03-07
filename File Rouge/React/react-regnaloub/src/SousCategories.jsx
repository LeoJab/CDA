import { useState, useEffect } from "react";
import axios from "axios";
import { useParams, Link } from "react-router-dom";

function SousCategories () {

    const {id} = useParams();
    console.log(id);
    
    const [liste, setListe] = useState([]);

    useEffect( () => {
        axios(`http://127.0.0.1:8000/api/sous_categories?categorie.id=${id}`, 
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
                            <Link to={`/produits/${element.id}`}>
                                <img src={`/assets/img/sCategories/${element.photo}`} alt="photo sous-categorie" />
                                <div className="card_categorie_lib_desc_btn">
                                    <div className="card_categorie_lib_desc">
                                        <p>{element.lib}</p>
                                        <p>{element.description}</p>
                                    </div>
                                    <div className="btn_categorie" href="#">Voir les produits</div>
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

export default SousCategories;