import { useState, useEffect } from "react";
import axios from "axios";
import { useParams, Link } from "react-router-dom";

function Produits () {
    const {id} = useParams();
    console.log(id);
    
    const [liste, setListe] = useState([]);

    useEffect( () => {
        axios(`http://127.0.0.1:8000/api/produits?SousCategorie.id=${id}`, 
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
        <h1 id="accueil_titre_prod">Liste de tout les produits</h1>
        <div id="produit">
            {
                liste.map((element, index) =>
                    (
                        <div className="card_produit" key={index}>
                        <Link to={`/details_produit/${element.id}`}>
                            <img src={`/assets/img/produits/${element.photo}`} alt="photo produit" />
                            <div className="card_produit_lib_desc_btn">
                                <div className="card_produit_lib_desc">
                                    <p>{ element.lib }</p>
                                    <p className="desc">{ element.description }</p>
                                    <div className="prix">
                                        <p>{ element.prix }€</p>
                                        <p className="ht">{ element.prixht }€HT</p>
                                    </div>
                                </div>
                                <div className="btn_panier">
                                    Voir les details du produit
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                    </svg>
                                </div>
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

export default Produits;