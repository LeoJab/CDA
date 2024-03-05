import { Link, Route, Routes } from "react-router-dom";
import Categories from './Categories';
import SousCategories from './SousCategories';
import Produits from './Produits'

function App() {
  return (

  <div>
      <nav>
        <Link to="/Categories">Categories</Link>
        <Link to="/sous_categories/36">Test</Link>
        <Link to="/Produits">Produit</Link>
      </nav>
    <hr />
    <Routes>
      <Route path="Categories" element={<Categories />} />
      <Route path="Produits" element={<Produits />} />
      <Route path="sous_categories/:id" element={<SousCategories />} />
    </Routes>
  </div>
  );
}

export default App;