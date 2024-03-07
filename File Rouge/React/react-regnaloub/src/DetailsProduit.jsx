import { useState, useEffect } from "react";
import axios from "axios";
import { useParams } from "react-router-dom";

function Produits () {
    const {id} = useParams();
    console.log(id);
    
    const [produit, setProduit] = useState(['']);

    useEffect( () => {
        axios(`http://127.0.0.1:8000/api/produits/${id}`, 
            {
                headers: { "Accept": "application/json"}
            }
        ).then(
            (response)=>{
                console.log(response.data);
                setProduit(response.data);
            }
        )
    }, [])

    return (
        <>
        <div id="page_detail">
            <div class="produit_detail">
                <img src={`/assets/img/produits/${produit.photo}`} alt="photo du produit" />
                <div class="produit_detail_lib_desc_btn">
                    <div class="produit_detail_lib_desc">
                        <p class="lib">{ produit.lib }</p>
                        <p>{ produit.description }</p>
                        <div class="prix">
                            <p>{ produit.prix }€</p>
                            <p class="ht">{ produit.prixht }€HT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </>
    );
}

export default Produits;