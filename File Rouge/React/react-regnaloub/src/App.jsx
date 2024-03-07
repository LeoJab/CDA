import { Link, Route, Routes } from "react-router-dom";
import Categories from './Categories';
import SousCategories from './SousCategories';
import Produits from './Produits'
import DetailsProduit from './DetailsProduit'

function App() {
  return (

  <div>
      <nav>
        <Link to="/Categories">Categories</Link>
        <Link to="/Produits">Produit</Link>
      </nav>
    <hr />
    <Routes>
      <Route path="Categories" element={<Categories />} />
      <Route path="Produits" element={<Produits />} />
      <Route path="sous_categories/:id" element={<SousCategories />} />
      <Route path="produits/:id" element={<Produits />} />
      <Route path="details_produit/:id" element={<DetailsProduit />} />
    </Routes>
  </div>
  );
}

export default App;